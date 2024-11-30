# Opcache Custom Check for Spatie's Laravel Health

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/f9webltd/laravel-health-opcache)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/f9webltd/laravel-health-opcache)

This is a custom check for Spatie's Laravel Health, to ensure Opcache is running and enabled.

## Installation

You can install the package via composer:

```bash
composer require f9webltd/laravel-health-opcache
```

## Usage

```php
// typically, in a service provider

use F9Web\Health\Checks\OpCache;
use Spatie\Health\Facades\Health;

Health::checks([
    OpCache::new(),
]);
```

## Testing

To follow :/

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Allport](https://github.com/ultrono) for [F9 Web Ltd](https://github.com/f9webltd)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
