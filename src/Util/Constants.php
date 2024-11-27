<?php

namespace App\Util;

class Constants
{

    const USER_REGISTRATION_COMPLETED_EVENT = 'registration';
    const USER_PASSWORD_REQUEST_COMPLETED_EVENT = 'reset_password';

    const FROM_EMAIL = 'sikaadmin@sikamail.com';
    const DEFAULT_LOCALE = 'de';
    const ALLOWED_LOCALES = ['en','de'];
    const USER_DEMO_IMAGE = 'assets/images/user_sika.png';
    const USER_IMAGE_FOLDER = '/assets/images/userimages/';

}
