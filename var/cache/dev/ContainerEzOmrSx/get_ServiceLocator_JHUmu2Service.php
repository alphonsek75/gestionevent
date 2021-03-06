<?php

namespace ContainerEzOmrSx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JHUmu2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JHUmu2_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JHUmu2_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', true],
        ], [
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
            'serializer' => '?',
        ]);
    }
}
