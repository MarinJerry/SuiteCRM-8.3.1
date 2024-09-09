<?php

namespace ContainerXEBcykI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Action_GraphiqlService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.graphql.action.graphiql' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphiQlAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'GraphiQlAction.php';

        return $container->services['api_platform.graphql.action.graphiql'] = new \ApiPlatform\Core\GraphQl\Action\GraphiQlAction(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->privates['api_platform.router'] ?? $container->getApiPlatform_RouterService()), true, '', NULL);
    }
}
