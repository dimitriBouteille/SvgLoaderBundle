<?php

namespace Dbout\Bundle\SvgLoaderBundle\Loader;

/**
 * Interface DboutSvgLoaderInterface
 *
 * @package Dbout\Bundle\SvgLoaderBundle\Loader
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
interface DboutSvgLoaderInterface
{

    /**
     * Function load
     *
     * @param string $svgFile
     * @return string|null
     */
    public function load(string $svgFile): ?string;

}