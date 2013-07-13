<?php

namespace D4m\Bundle\EbayBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('d4m_ebay');

        $rootNode
            ->children()
            ->scalarNode('session_token')->defaultValue('')->end()
            ->scalarNode('session_mode')->defaultValue('sandbox')->end()
            ->arrayNode('session_credentials')
                ->children()
                    ->scalarNode('name')->end()
                    ->scalarNode('appId')->end()
                    ->scalarNode('devId')->end()
                    ->scalarNode('certId')->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}