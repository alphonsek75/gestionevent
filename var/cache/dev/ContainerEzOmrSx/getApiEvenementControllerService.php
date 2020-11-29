<?php

namespace ContainerEzOmrSx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiEvenementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiEvenementController' shared autowired service.
     *
     * @return \App\Controller\ApiEvenementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApiEvenementController.php';

        $container->services['App\\Controller\\ApiEvenementController'] = $instance = new \App\Controller\ApiEvenementController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ApiEvenementController', $container));

        return $instance;
    }
}
