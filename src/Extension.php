<?php

namespace Novaway\CommonContexts;

use Symfony\Component\Config\FileLocator;
use Behat\Behat\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class Extension implements ExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/services'));
        $loader->load('core.yml');

        $container->setParameter('nw_common_contexts.parameters', $config);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(ArrayNodeDefinition $builder)
    {
        $builder
            ->children()
                ->arrayNode('contexts')
                    ->isRequired()
                    ->children()
                        ->arrayNode('select2')
                            ->children()
                                ->scalarNode('enable')->defaultTrue()->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompilerPasses()
    {
        return [];
    }
}
