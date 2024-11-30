# Opcache Custom Check for Spatie's Laravel Health

[![Latest Version on Packagist](https://img.shields.io/packagist/v/f9webltd/laravel-health-opcache.svg?style=flat-square)](https://packagist.org/packages/f9webltd/laravel-health-opcache)
[![Total Downloads](https://img.shields.io/packagist/dt/f9webltd/laravel-health-opcache.svg?style=flat-square)](https://packagist.org/packages/f9webltd/laravel-health-opcache)

This is a custom check for Spatie's Laravel Health, to ensure Opcache is running and enabled.

## Installation

You can install the package via composer:

```bash
composer require f9webltd/laravel-health-opcache
```

## Usage

```php
// typically, in a service provider

use F9Web\Health\Checks\OpCacheCheck;
use Spatie\Health\Facades\Health;

Health::checks([
    OpCacheCheck::new(),
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
