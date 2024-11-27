<?php

namespace App\Service;


use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Events\AuthenticationEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordToken;

class AuthenticationService
{


    private $mailer;
    private $entityManager;
    private $passwordEncoder;
    private $eventDispatcher;

     /**
     * Authentication service constructor
     *
     * @param MailerInterface                $mailer
     * @param EntityManagerInterface         $entityManager
     * @param UserPasswordEncoderInterface   $passwordEncoder
     * @param EventDispatcherInterface       $eventDispatcher
     */
    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder, EventDispatcherInterface $eventDispatcher)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
        $this->eventDispatcher = $eventDispatcher;
    }

     /**
     * Function to handle the user registration
     *
     * @param string $email
     * @param string $plainPassword
     */
    public function register(User $user, string $email, string $plainPassword): void
    {
        $encodedPassword = $this->passwordEncoder->encodePassword(
        $user, $plainPassword
        );

        $userObj = $this->entityManager->getRepository(User::class)->registerUser($user, $email, $encodedPassword);
        $authEvent = new AuthenticationEvent();
        $authEvent->setUser($userObj);

        $this->eventDispatcher->dispatch($authEvent, 'registration');
    }

    /**
     * Function to get the user data for the reset password
     *
     * @param string $email
     *
     * @return User
     */
    public function getUserDataForResetPassword(string $email): ?User
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
         'email' => $email,
        ]);

        return $user;
    }

     /**
     * Function to handle the reset password request
     *
     * @param User               $user
     * @param ResetPasswordToken $resetToken
     */
    public function handleResetPassword(User $user, ResetPasswordToken$resetToken): void
    {
        $authEvent = new AuthenticationEvent();
        $authEvent->setUser($user);
        $authEvent->setResetPasswordToken($resetToken);

        $this->eventDispatcher->dispatch($authEvent, 'reset_password');
    }
}
