<?php

namespace Container6bw71DM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UKO8DpxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UKO8Dpx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UKO8Dpx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EtatController::delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController::edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController::index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\EtatController::show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\EtatController:delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController:edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController:index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\EtatController:show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\EtatController::delete' => '?',
            'App\\Controller\\EtatController::edit' => '?',
            'App\\Controller\\EtatController::index' => '?',
            'App\\Controller\\EtatController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EtatController:delete' => '?',
            'App\\Controller\\EtatController:edit' => '?',
            'App\\Controller\\EtatController:index' => '?',
            'App\\Controller\\EtatController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
