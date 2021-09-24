# Utility to validate string for Mexican RFC

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rafahernandez/rfc-validator.svg?style=flat-square)](https://packagist.org/packages/rafahernandez/rfc-validator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rafahernandez/rfc-validator/run-tests?label=tests)](https://github.com/rafahernandez/rfc-validator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rafahernandez/rfc-validator/Check%20&%20fix%20styling?label=code%20style)](https://github.com/rafahernandez/rfc-validator/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rafahernandez/rfc-validator.svg?style=flat-square)](https://packagist.org/packages/rafahernandez/rfc-validator)

---
## Español
Este paquete contiene  una regla para validar RFC (Registro Federal de contribuyentes) mexicanos.

No valida las fechas, ni hace llamadas externas para comprobar si existen.

## English
This package contains a rule to validate Mexican RFCs (Equivalent to other countries Tax ID).

It does not validate the dates, nor does it make external calls to check if they exist.


## Installation

You can install the package via composer:

```bash
composer require rafahernandez/rfc-validator
```

## Usage

```php
use RafaHernandez\RfcValidator\RFC;

$request->validate([
    'rfc' => ['required', new RFC()],
]);
```

Optional, define the type of fiscal person


```php
use RafaHernandez\RfcValidator\RFC;

// XAXX010101000 will fail
// XAX010101000 will pass

$request->validate([
    'rfc' => ['required', new RFC(RFC::PERSONA_MORAL)], //also available PERSONA_FISICA
]);
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

## Credits

- [Rafael Hernandez](https://github.com/rafahernandez)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
