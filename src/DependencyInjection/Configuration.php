<?php

namespace Dbout\Bundle\SvgLoaderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Dbout\Bundle\SvgLoaderBundle\DependencyInjection
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class Configuration implements ConfigurationInterface
{

    /**
     * Function getConfigTreeBuilder
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('dbout_svg_loader');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode->children()
            ->scalarNode('resourcePath')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}