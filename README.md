# middlewares/content-length

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
![Testing][ico-ga]
[![Total Downloads][ico-downloads]][link-downloads]

Middleware to inject the Content-Length header into the response based on the body size.

## Requirements

* PHP >= 7.2
* A [PSR-7 http library](https://github.com/middlewares/awesome-psr15-middlewares#psr-7-implementations)
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
[ico-ga]: https://github.com/middlewares/content-length/workflows/testing/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/content-length.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/content-length
[link-downloads]: https://packagist.org/packages/middlewares/content-length
