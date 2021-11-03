# Laravel Cnab

[![Latest Version on Packagist](https://img.shields.io/packagist/v/idezdigital/cnab.svg?style=flat-square)](https://packagist.org/packages/idezdigital/cnab)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/idezdigital/cnab/Tests?label=tests)](https://github.com/idezdigital/cnab/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/idezdigital/cnab/Check%20&%20fix%20styling?label=code%20style)](https://github.com/idezdigital/cnab/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/idezdigital/laravel-cnab.svg?style=flat-square)](https://packagist.org/packages/idezdigital/laravel-cnab)

A Laravel package to handle Cnab files.

## Installation

You can install the package via composer:

```bash
composer require idezdigital/laravel-cnab
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Idez\Cnab\Providers\CnabServiceProvider" --tag="cnab-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Idez\Cnab\Providers\CnabServiceProvider" --tag="cnab-config"
```

This is the contents of the published config file:

```php
return [
    //
];
```

## Usage

```php
// Parse
$parsedFile = cnab()->parse(
    type: '',
    layout: 400,
    bank: 0,
    file: ''
);

// Generate
$cnabFile = cnab()->generate(
    type: '',
    layout: 400,
    bank: 0,
    data: []
);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
