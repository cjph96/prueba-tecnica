<?php

namespace ContainerHjmV8Ce;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAllProcessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GetAllProcessController' shared autowired service.
     *
     * @return \App\Controller\GetAllProcessController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/GetAllProcessController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/Processes/Application/GetAllProcesess.php';

        return $container->services['App\\Controller\\GetAllProcessController'] = new \App\Controller\GetAllProcessController(new \App\Service\Processes\Application\GetAllProcesess(($container->privates['App\\Service\\Processes\\Infraestructure\\ProcesessDoctrineProxyRepository'] ?? $container->load('getProcesessDoctrineProxyRepositoryService'))));
    }
}
