# Laravel accessible forms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/studio24/laravel-accessible-forms.svg?style=flat-square)](https://packagist.org/packages/studio24/laravel-accessible-forms)
[![Tests](https://img.shields.io/github/actions/workflow/status/studio24/laravel-accessible-forms/php.yml?branch=main&label=tests&style=flat-square)](https://github.com/studio24/laravel-accessible-forms/actions/workflows/php.yml)

Create more accessible forms in your Laravel apps

## Requirements

* PHP 8.2+

## Installation

You can install the package via [Composer](https://getcomposer.org/):

```shell
composer require studio24/laravel-accessible-forms
```

## Usage

Installs the following package in your Laravel app:
- [studio24/accessible-forms](https://github.com/studio24/accessible-forms)
  - [barryvdh/laravel-form-bridge](https://github.com/barryvdh/laravel-form-bridge)
  - [symfony/form](https://github.com/symfony/form)

And sets up accessible forms in your Laravel app:
- Adds AccessibleFormsServiceProvider
- Registers Twig helpers
- Registers Blade directives
- Defaults to the `accessible-forms.html.twig` form theme

For more, see the documentation for [accessible-forms](https://github.com/studio24/accessible-forms/tree/main/docs).

## Testing

```shell
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Find out more about [how to contribute](CONTRIBUTING.md) and our [Code of Conduct](CODE_OF_CONDUCT.md).

## Security Issues

If you discover a security vulnerability within this package, please follow our [disclosure procedure](SECURITY.md).

## About

This package is developed by [Studio 24](https://www.studio24.net/), a human-centered digital agency who build websites and web apps that work for everyone.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
