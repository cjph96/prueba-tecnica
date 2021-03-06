<?php

namespace ContainerHjmV8Ce;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProcessController' shared autowired service.
     *
     * @return \App\Controller\ProcessController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProcessController.php';

        $container->services['App\\Controller\\ProcessController'] = $instance = new \App\Controller\ProcessController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\ProcessController', $container));

        return $instance;
    }
}
