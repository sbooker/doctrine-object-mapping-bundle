<?php

declare(strict_types=1);

namespace Sbooker\DoctrineObjectMappingBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

final class SbookerDoctrineObjectMappingExtension extends ConfigurableExtension
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        foreach ($mergedConfig as $key => $value) {
            $container->setParameter($this->getAlias() . '.' . $key, $value);
        }

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yaml');
    }
}
