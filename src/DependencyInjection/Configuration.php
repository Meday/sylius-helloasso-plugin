<?php

declare(strict_types=1);

namespace Meday\SyliusHelloAssoPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('meday_sylius_hello_asso');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
