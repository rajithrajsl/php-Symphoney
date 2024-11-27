<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\AuthenticationEvent;
use App\Service\MailerService;
use App\Util\Constants;

class AuthenticationSubscriber implements EventSubscriberInterface
{

    private $mailer;

    public function __construct(MailerService $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents(): array
    {

        return [
            Constants::USER_REGISTRATION_COMPLETED_EVENT => 'onUserRegistrationComplete',
            Constants::USER_PASSWORD_REQUEST_COMPLETED_EVENT => 'onUserResetPasswordRequestComplete',
        ];
    }

    public function onUserRegistrationComplete(AuthenticationEvent $authEvent): void
    {
        $this->mailer->sendRegistrationConfirmationMail($authEvent);
    }

    public function onUserResetPasswordRequestComplete(AuthenticationEvent $authEvent): void
    {
        $this->mailer->sendResetPasswordMail($authEvent);
    }
}
