<?php

namespace App\Events;

use App\Entity\User;
use Symfony\Contracts\EventDispatcher\Event;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordToken;

class AuthenticationEvent extends Event
{

    private $user;
    private $resetToken;

    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getResetPasswordToken()
    {
        return $this->resetToken;
    }

    /**
     * @param ResetPasswordToken $resetToken
     */
    public function setResetPasswordToken(ResetPasswordToken $resetToken)
    {
        $this->resetToken = $resetToken;
    }
}
