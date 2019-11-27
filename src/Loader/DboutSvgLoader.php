<?php

namespace Dbout\Bundle\SvgLoaderBundle\Loader;

/**
 * Class DboutSvgLoader
 *
 * @package Dbout\Bundle\SvgLoaderBundle\Loader
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class DboutSvgLoader implements DboutSvgLoaderInterface
{

    /**
     * @var string
     */
    private $pathResources;

    /**
     * DboutSvgLoader constructor.
     * @param string $pathResources
     */
    public function __construct(string $pathResources)
    {
        $this->pathResources = $this->cleanPath($pathResources);
    }

    /**
     * Function load
     *
     * @param string $svgFile
     * @return string|null
     * @throws \Exception
     */
    public function load(string $svgFile): ?string
    {
        $path = $this->makePath($svgFile);
        if(!file_exists($path)) {
            throw new \Exception(sprintf('The file %s not exist', $path));
        }

        $svg = $this->loadSvg($path);
        return $svg;
    }

    /**
     * Function loadSvg
     *
     * @param string $path
     * @return string
     */
    private function loadSvg(string $path): string
    {
        $svg = file_get_contents($path);
        if($svg === false) {
            return null;
        }

        $svg = trim(preg_replace('/\s\s+/', ' ', $svg));
        return $svg;
    }

    /**
     * Function cleanPath
     *
     * @param string $path
     * @return string
     */
    private function cleanPath(string $path): string
    {
        return trim($path, '\\/');
    }

    /**
     * Function makePath
     *
     * @param string $svgFile
     * @return string
     */
    private function makePath(string $svgFile): string
    {
        $svgFile = $this->cleanPath($svgFile);
        $extension = pathinfo($svgFile, PATHINFO_EXTENSION);
        if(empty($extension)) {
            $svgFile .= '.svg';
        }

        $path = $this->pathResources . DIRECTORY_SEPARATOR . $svgFile;
        return $path;
    }

}