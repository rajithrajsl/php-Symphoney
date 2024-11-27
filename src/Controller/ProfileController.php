<?php

namespace App\Controller;

use App\Form\ProfileFormType;
use App\Entity\User;
use App\Service\UploaderHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProfileController extends AbstractController
{

    /** @var TranslatorInterface $translator */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    /**
     * @Route("/admin/{_locale}/profile", name="profile_index")
     */
    public function profileIndex(Request $request, UploaderHelper $uploaderHelper): Response
    {
        if ($this->getUser()) {
            $user = $this->getUser();
            $form = $this->createForm(ProfileFormType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $uploadedFile */
                $uploadedFile = $form['imageFile']->getData();
                if ($uploadedFile) {
                    $newFilename = $uploaderHelper->uploadProfileImage($uploadedFile);
                    $user->setProfilePic($newFilename);
                } else {
                    $imageFileName = $form['imageFileName']->getData();
                    if ($imageFileName == null) {
                        $user->setProfilePic(null);
                    }
                }
                $this->getDoctrine()->getManager()->getRepository(User::class)->updateUser($user);
                $this->addFlash('success', $this->translator->trans('profile_update_success'));
            }
            return $this->render('customer/profile_index.html.twig', [
                'profileForm' => $form->createView(),
                'user'  => $user
            ]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}
