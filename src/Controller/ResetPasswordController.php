<?php

namespace App\Controller;

use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use App\Service\AuthenticationService;

/**
 * @Route("/reset-password")
 */
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    private $resetPasswordHelper; 
    private $authService;

    public function __construct(ResetPasswordHelperInterface $resetPasswordHelper, AuthenticationService $authService)
    {
        $this->resetPasswordHelper = $resetPasswordHelper;
        $this->authService = $authService;
    }

    /**
     * Display & process form to request a password reset.
     *
     * @Route("", name="app_forgot_password_request")
     */
    public function request(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passReqSendSuccess= $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(),
                $mailer
            );
            if($passReqSendSuccess == false){
                 $this->addFlash('reset_password_error','User does not exist');
            }else{ 
                return $passReqSendSuccess;
            
            }
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     *
     * @Route("/check-email", name="app_check_email")
     */
    public function checkEmail(): Response
    {
        // We prevent users from directly accessing this page
        if (!$this->canCheckEmail()) {
            return $this->redirectToRoute('app_forgot_password_request');
        }

        return $this->render('reset_password/check_email.html.twig', [
            'tokenLifetime' => $this->resetPasswordHelper->getTokenLifetime(),
        ]);
    }

    /**
     * Validates and process the reset URL that the user clicked in their email.
     *
     * @Route("/reset/{token}", name="app_reset_password")
     */
    public function reset(Request $request, UserPasswordEncoderInterface $passwordEncoder, string $token = null): Response
    {
        if ($token) {
            // We store the token in session and remove it from the URL, to avoid the URL being
            // loaded in a browser and potentially leaking the token to 3rd party JavaScript.
            $this->storeTokenInSession($token);

            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('No reset password token found in the URL or in the session.');        
        }

        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);           
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error',  $e->getReason());
            return $this->redirectToRoute('app_forgot_password_request');
        }

        // The token is valid; allow the user to change their password.
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // A password reset token should be used only once, remove it.
            $this->resetPasswordHelper->removeResetRequest($token);

            // Encode the plain password, and set it.
            $encodedPassword = $passwordEncoder->encodePassword(
                $user,
                $form->get('plainPassword')->getData()
            );

            $user->setPassword($encodedPassword);
            $this->getDoctrine()->getManager()->flush();

            // The session is cleaned up after the password has been changed.
            $this->cleanSessionAfterReset();
            $this->addFlash('success',  "Your password had changed succesfully");
            
            return $this->redirectToRoute('index');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    /**
     * Function to process the reset password mail sending
     *
     * @param string          $emailFormData
     * @param MailerInterface $mailer
     * 
     * @return RedirectResponse or bool
     */
    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer)
    {
        $isUser= true;
        $user= $this->authService->getUserDataForResetPassword($emailFormData);

        // Marks that you are allowed to see the app_check_email page.
        $this->setCanCheckEmailInSession();

        //Reveal whether a user account was found or not.
        if (!$user) {
              $isUser= false;
              return $isUser;
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error', $e->getReason());
            return $this->redirectToRoute('app_forgot_password_request');
        }
        $this->authService->handleResetPassword($user, $resetToken);
        
        return $this->redirectToRoute('app_check_email');
    }
}
