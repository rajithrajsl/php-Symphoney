<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use App\Util\Constants;

class LocaleSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;

    public function __construct($defaultLocale = Constants::DEFAULT_LOCALE)
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest(RequestEvent $event)
    { 
        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
           
            return;
        }
       
        if ($locale = $request->attributes->get('_locale') && in_array($request->attributes->get('_locale'), Constants::ALLOWED_LOCALES)) {
            
            $request->getSession()->set('_locale', $request->attributes->get('_locale'));
             $request->setLocale($request->attributes->get('_locale'));
        } else {
            $request->getSession()->remove('_locale');
            $request->getSession()->set('_locale', $this->defaultLocale);
            $request->setLocale($this->defaultLocale);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 10]],
        ];
    }
}
