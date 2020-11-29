<?php

namespace Container6Fyumzz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MtoGLzcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mtoGLzc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mtoGLzc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'inscriptionRepository' => ['privates', 'App\\Repository\\InscriptionRepository', 'getInscriptionRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', true],
        ], [
            'em' => '?',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
            'inscriptionRepository' => 'App\\Repository\\InscriptionRepository',
            'serializer' => '?',
        ]);
    }
}