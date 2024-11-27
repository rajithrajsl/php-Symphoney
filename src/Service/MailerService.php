<?php

namespace App\Service;

use Twig\Environment;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use App\Events\AuthenticationEvent;
use App\Util\Constants;

class MailerService
{

    protected $mailer;
    protected $templating;
    protected $resetPasswordHelper;
    protected $verifyEmailHelper;

    /**
     * Mailer service constructor
     *
     * @param Swift_Mailer                  $mailer
     * @param Environment                   $templating
     * @param ResetPasswordHelperInterface  $resetPasswordHelper
     */
    public function __construct(\Swift_Mailer $mailer, Environment $templating, ResetPasswordHelperInterface $resetPasswordHelper, VerifyEmailHelperInterface $emailHelper)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->resetPasswordHelper = $resetPasswordHelper;
        $this->verifyEmailHelper = $emailHelper;
    }

    /**
     * Function to handle sending of registration confirmation mail
     *
     * @param AuthenticationEvent $authData
     *
     * @return bool
     */
    public function sendRegistrationConfirmationMail(AuthenticationEvent $authData): bool
    {
        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            'app_verify_email', $authData->getUser()->getId(), $authData->getUser()->getEmail()
        );
        $subject = 'Confirm your mail';
        $body = $this->templating->render('registration/confirmation_email.html.twig', [
            'signedUrl' => $signatureComponents->getSignedUrl(),
            'expiresAt' => $signatureComponents->getExpiresAt(),
        ]);

        return (bool) $this->sendEmail($body, (string) $authData->getUser()->getEmail(), $subject);
    }

    /**
     * Function to handle sending of reset password mail
     *
     * @param AuthenticationEvent $authData
     *
     * @return bool
     */
    public function sendResetPasswordMail(AuthenticationEvent $authData): bool
    {
        $subject = 'Your password reset request';
        $resetToken = $authData->getResetPasswordToken();
        $body = $this->templating->render('reset_password/email.html.twig', [
            'resetToken' => $resetToken,
            'tokenLifetime' => $this->resetPasswordHelper->getTokenLifetime(),
        ]);

        return (bool) $this->sendEmail($body, (string) $authData->getUser()->getEmail(), $subject);
    }

    /**
     * Function to send a  mail
     *
     * @param string $body
     * @param string $toEmail
     * @param string $subject
     *
     * @return bool
     */
    protected function sendEmail(string $body, string $toEmail, string $subject): bool
    {
        $message = (new \Swift_Message())
            ->setSubject($subject)
            ->setFrom(Constants::FROM_EMAIL)
            ->setTo($toEmail)
            ->setBody($body, 'text/html');

        return (bool) $this->mailer->send($message);
    }
}
