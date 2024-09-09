<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_RateLimiterService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.rate_limiter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['cache.rate_limiter'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('PygNCeU44B', 0, ($container->targetDir.''.'/pools'), ($container->privates['cache.default_marshaller'] ?? ($container->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));

        return $instance;
    }
}
