<?php

namespace Dbout\Bundle\SvgLoaderBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class SvgLoaderCompilerPass
 *
 * @package Dbout\Bundle\SvgLoaderBundle\DependencyInjection\Compiler
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class SvgLoaderCompilerPass implements CompilerPassInterface
{

    /**
     * Function process
     *
     * @param ContainerBuilder $container
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
    }

}