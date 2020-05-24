<?php

declare(strict_types=1);

namespace Sbooker\DoctrineObjectMappingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('sbooker_doctrine_object_mapping');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('normalizer')->defaultValue('serializer') ->end()
                ->scalarNode('denormalizer')->defaultValue('serializer') ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
