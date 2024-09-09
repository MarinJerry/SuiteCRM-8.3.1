<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\LegacyHandler\RecordMapper' shared autowired service.
     *
     * @return \App\Data\LegacyHandler\RecordMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'RecordMapper.php';

        return $container->privates['App\\Data\\LegacyHandler\\RecordMapper'] = new \App\Data\LegacyHandler\RecordMapper(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()));
    }
}
