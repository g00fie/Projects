<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        'register' => [['_locale'], ['_controller' => 'App\\Controller\\API\\AuthController::register'], ['_locale' => 'pl|en'], [['text', '/API/register'], ['variable', '/', 'pl|en', '_locale', true]], [], []],
        'register-default-locale' => [[], ['_controller' => 'App\\Controller\\API\\AuthController::register'], [], [['text', '/API/register']], [], []],
        'default' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
        'index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/index']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/home']], [], []],
        'start' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/start']], [], []],
        'intro' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/intro']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
