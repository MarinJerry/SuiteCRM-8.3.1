<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLdapService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Symfony\Component\Ldap\Ldap' shared service.
     *
     * @return \Symfony\Component\Ldap\Ldap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'LdapInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'Ldap.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ExtLdap'.\DIRECTORY_SEPARATOR.'Adapter.php';

        return $container->privates['Symfony\\Component\\Ldap\\Ldap'] = new \Symfony\Component\Ldap\Ldap(new \Symfony\Component\Ldap\Adapter\ExtLdap\Adapter(['host' => $container->getEnv('LDAP_HOST'), 'port' => $container->getEnv('LDAP_PORT'), 'encryption' => $container->getEnv('LDAP_ENCRYPTION'), 'options' => ['protocol_version' => $container->getEnv('LDAP_PROTOCOL_VERSION'), 'referrals' => $container->getEnv('LDAP_REFERRALS')]]));
    }
}
