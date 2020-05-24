# Doctrine object mapping bundle

[![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![PHP Version][badge-php]][php]
[![Total Downloads][badge-downloads]][downloads]

Maps immutable object and object list to single json field.

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 1: Download library

```console
$ composer require sbooker/doctrine-object-mapping-bundle 
```

### Step 2: Enable the Bundle (skip this step if your project use Symfony Flex)

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Sbooker\DoctrineObjectMappingBundle\SbookerDoctrineObjectMappingBundle::class => ['all' => true],
];
```

### Step 3: Customize normalizer/denormalizer (skip this step if not needed)
```yaml
# config/packages/sbooker_doctrine_object_mapping.yaml

sbooker_doctrine_object_mapping:
      normalizer: your.normalizer.service
      denormalizer: your.denormalizer.service
```

### Step 4: Declare Doctrine types
See [`sbooker/doctrine-object-mapping`](https://github.com/sbooker/doctrine-object-mapping) documentation.

### Step 5: Register Doctrine types
See [`symfony/doctrine-bundle`](https://symfony.com/doc/current/bundles/DoctrineBundle/index.html) documentation.

## License
See [LICENSE][license] file.

[badge-release]: https://img.shields.io/packagist/v/sbooker/doctrine-object-mapping-bundle.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-php]: https://img.shields.io/packagist/php-v/sbooker/doctrine-object-mapping-bundle.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/sbooker/doctrine-object-mapping-bundle.svg?style=flat-square

[release]: https://img.shields.io/packagist/v/sbooker/doctrine-object-mapping-bundle
[license]: https://github.com/sbooker/doctrine-object-mapping-bundle/blob/master/LICENSE
[php]: https://php.net
[downloads]: https://packagist.org/packages/sbooker/doctrine-object-mapping-bundle

