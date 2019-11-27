<?php

namespace Dbout\Bundle\SvgLoaderBundle;

use Dbout\Bundle\SvgLoaderBundle\DependencyInjection\Compiler\SvgLoaderCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DboutSvgLoaderBundle
 *
 * @package Dbout\Bundle\SvgLoaderBundle
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
final class DboutSvgLoaderBundle extends Bundle
{

    /**
     * Function build
     *
     * @param ContainerBuilder $container
     * @return void
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new SvgLoaderCompilerPass());
    }
}