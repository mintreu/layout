# Mintreu (Blade) Layout For All Kind Of Laravel Application

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mintreu/layout.svg?style=flat-square)](https://packagist.org/packages/mintreu/layout)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mintreu/layout/run-tests?label=tests)](https://github.com/mintreu/layout/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mintreu/layout/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/mintreu/layout/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mintreu/layout.svg?style=flat-square)](https://packagist.org/packages/mintreu/layout)

<!-- This is where your description should go. Limit it to a paragraph or two. Consider adding a small example. -->

## Support us

<!-- [<img src="https://github-ads.s3.eu-central-1.amazonaws.com/layout.jpg?t=1" width="419px" />](https://mintreu.com/github-ad-click/layout) -->

We invest a lot of resources into creating [best in class open source packages](https://mintreu.com/open-source). You can support us by [buying one of our paid products](https://mintreu.com/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://mintreu.com/about-us).

## Installation 

You can install the package via composer:

```bash
composer require mintreu/layout
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="layout-config"
```

This is the contents of the published config file:

```php
return [
];
```


## Usage

you can generate views

```bash
php artisan make:layout "layoutName"
```
generate theme
```bash
php artisan layout:theme "layoutName"
```
generate manifest
```bash
php artisan layout:manifest
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/Krishzzi/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Krishanu](https://github.com/Krishzzi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
