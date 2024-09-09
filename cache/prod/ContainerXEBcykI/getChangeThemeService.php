<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangeThemeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\LegacyMigration\Steps\ChangeTheme' autowired service.
     *
     * @return \App\Install\Service\LegacyMigration\Steps\ChangeTheme
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'LegacyMigration'.\DIRECTORY_SEPARATOR.'LegacyMigrationStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Installation'.\DIRECTORY_SEPARATOR.'InstallStepTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'LegacyMigration'.\DIRECTORY_SEPARATOR.'Steps'.\DIRECTORY_SEPARATOR.'ChangeTheme.php';

        $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ChangeTheme'] = function () use ($container) {
            return new \App\Install\Service\LegacyMigration\Steps\ChangeTheme(($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->getInstallHandlerService()));
        };

        return $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ChangeTheme']();
    }
}
