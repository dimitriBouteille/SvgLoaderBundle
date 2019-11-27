# Svg loader bundle pour Symfony 4

[![Php version](https://img.shields.io/badge/Symfony-4-red.svg)](https://symfony.com/4)

Petit bundle permettant de charger des fichiers Svg pour Symfony 4.

### Installation

```bash
composer require dbout/svg-loader-bundle
```

### Configuration

```yaml
dbout_svg_loader:
  resourcePath: '%kernel.project_dir%/resources/svg/' # Chemin vers le dossier qui contient les svg
```

### Utilisation

Dans `twig` :

```twig
<p class="my-svg">
    {{ svg('user') }}
</p>
```

Dans un service :

```php
use Dbout\Bundle\SvgLoader\Loader\DboutSvgLoaderInterface;

public function contactUs(DboutSvgLoaderInterface $loader) 
{
    $svg = $loader->load('contact');
}
```