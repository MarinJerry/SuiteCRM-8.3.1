<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAllRecordThreadListActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\RecordThreadListActions\DeleteAllRecordThreadListAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordThreadListActions\DeleteAllRecordThreadListAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RecordThreadListActions'.\DIRECTORY_SEPARATOR.'DeleteAllRecordThreadListAction.php';

        return $container->privates['App\\Process\\Service\\RecordThreadListActions\\DeleteAllRecordThreadListAction'] = new \App\Process\Service\RecordThreadListActions\DeleteAllRecordThreadListAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Data\\LegacyHandler\\RecordDeletionHandler'] ?? $container->load('getRecordDeletionHandlerService')));
    }
}
