<?php

namespace Dbout\Bundle\SvgLoaderBundle\Twig\Extension;

use Dbout\Bundle\SvgLoader\Loader\DboutSvgLoaderInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class SvgLoaderExtension
 *
 * @package Dbout\Bundle\SvgLoaderBundle\Twig\Extension
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class SvgLoaderExtension extends AbstractExtension
{

    /**
     * @var DboutSvgLoaderInterface
     */
    private $svgLoader;

    /**
     * SvgLoaderExtension constructor.
     * @param DboutSvgLoaderInterface $svgLoader
     */
    public function __construct(DboutSvgLoaderInterface $svgLoader)
    {
        $this->svgLoader = $svgLoader;
    }

    /**
     * Function getFunctions
     *
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            'svg' => new TwigFunction('svg', [$this, 'loadSvg'],['is_safe' => ['html',]])
        ];
    }

    /**
     * Function loadSvg
     *
     * @param string $svgFile
     * @return string|null
     */
    public function loadSvg(string $svgFile): ?string
    {
        return $this->svgLoader->load($svgFile);
    }

}