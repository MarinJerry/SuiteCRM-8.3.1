<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadsEmailOptoutMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Leads\Service\MassUpdate\LeadsEmailOptoutMapper' shared autowired service.
     *
     * @return \App\Module\Leads\Service\MassUpdate\LeadsEmailOptoutMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Module'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ModuleAwareRegistryItemInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MassUpdateDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'FieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MassUpdate'.\DIRECTORY_SEPARATOR.'MassUpdateFieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MassUpdate'.\DIRECTORY_SEPARATOR.'EmailOptoutMapper.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'modules'.\DIRECTORY_SEPARATOR.'Leads'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MassUpdate'.\DIRECTORY_SEPARATOR.'LeadsEmailOptoutMapper.php';

        return $container->privates['App\\Module\\Leads\\Service\\MassUpdate\\LeadsEmailOptoutMapper'] = new \App\Module\Leads\Service\MassUpdate\LeadsEmailOptoutMapper(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\ViewDefinitions\\Service\\FieldAliasMapper'] ?? $container->load('getFieldAliasMapperService')));
    }
}
