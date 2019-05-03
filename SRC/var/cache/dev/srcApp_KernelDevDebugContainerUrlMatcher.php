<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/API/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\API\\AuthController::register'], null, null, null, false, false, null]],
            '/API/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\API\\MailController::contact'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'main-page-default-locale', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
            '/home' => [[['_route' => 'home-default-locale', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/(pl|en)(?'
                        .'|(*:53)'
                        .'|/home(*:65)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            53 => [[['_route' => 'main-page', '_controller' => 'App\\Controller\\MainController::index'], ['_locale'], null, null, true, true, null]],
            65 => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], ['_locale'], null, null, false, false, null]],
        ];
    }
}
