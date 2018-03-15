# middlewares/content-length

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabs Insight][ico-sensiolabs]][link-sensiolabs]

Middleware to inject the Content-Length header into the response based on the body size.

## Requirements

* PHP >= 7.0
* A [PSR-7](https://packagist.org/providers/psr/http-message-implementation) http message implementation ([Diactoros](https://github.com/zendframework/zend-diactoros), [Guzzle](https://github.com/guzzle/psr7), [Slim](https://github.com/slimphp/Slim), etc...)
* A [PSR-15 middleware dispatcher](https://github.com/middlewares/awesome-psr15-middlewares#dispatcher)

## Installation

This package is installable and autoloadable via Composer as [middlewares/content-length](https://packagist.org/packages/middlewares/content-length).

```sh
composer require middlewares/content-length
```

## Example

```php
$dispatcher = new Dispatcher([
	new Middlewares\ContentLength()
]);

$response = $dispatcher->dispatch(new ServerRequest());
```

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/content-length.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/middlewares/content-length/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/middlewares/content-length.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/content-length.svg?style=flat-square
[ico-sensiolabs]: https://img.shields.io/sensiolabs/i/b47458aa-65b9-4970-bfcf-4e6e9b79dcc5.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/content-length
[link-travis]: https://travis-ci.org/middlewares/content-length
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/content-length
[link-downloads]: https://packagist.org/packages/middlewares/content-length
[link-sensiolabs]: https://insight.sensiolabs.com/projects/b47458aa-65b9-4970-bfcf-4e6e9b79dcc5
