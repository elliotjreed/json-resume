[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](code-of-conduct.md)

# JSON Résumé builder for PHP

A PHP library for building a [JSON Resume](https://jsonresume.org).

JSON Resume is a community driven open source initiative to create JSON-based standard for resumes.

You can create a public [Gist on GitHub](https://gist.github.com/), then add your username the JSON Resume registry URL to generate a nice-looking CV / resume, for example:

[https://registry.jsonresume.org/YOUR_GITHUB_USERNAME](https://registry.jsonresume.org/YOUR_GITHUB_USERNAME)

Different themes are available at [jsonresume.org/themes/](https://jsonresume.org/themes/).

## Installation

PHP 8.1 or above is required.

To install via [Composer](https://getcomposer.org/download/):

```bash
composer require elliotjreed/json-resume
```

## Usage

```php
<?php

require 'vendor/autoload.php';

$resume = (new \ElliotJReed\JsonResume\Entity\Resume())
    ->setBasics((new \ElliotJReed\JsonResume\Entity\Basics()
        ->setName('Elliot Reed'))
    ->setWork((new \ElliotJReed\JsonResume\Entity\Work())
        ->setName('Company Ltd.')
        ->setPosition('Spatula Tester')));

$jsonResume = new \ElliotJReed\JsonResume\JsonResume();

echo $jsonResume->asJson($jsonResume);
```

The PHP entities mirror the JSON Resume standard found at [jsonresume.org/schema](https://jsonresume.org/schema/).

## Getting Started with Development

### Installing Composer

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).

### Installing

After cloning this repository, change into the newly created directory and run:

```bash
composer install
```

or if you have installed Composer locally in your current directory:

```bash
php composer.phar install
```

This will install all dependencies needed for the project.

Henceforth, the rest of this README will assume `composer` is installed globally (ie. if you are using `composer.phar` you will need to use `composer.phar` instead of `composer` in your terminal / command-line).

## Running the Tests

### Unit tests

Unit testing in this project is via [PHPUnit](https://phpunit.de/).

All unit tests can be run by executing:

```bash
composer phpunit
```

#### Debugging

To have PHPUnit stop and report on the first failing test encountered, run:

```bash
composer phpunit:debug
```

### Static analysis

Static analysis tools can point to potential "weak spots" in your code, and can be useful in identifying unexpected side-effects.

[Psalm](https://psalm.dev/) is configured at its highest levels, meaning false positives are quite likely.

Static analysis tests can be run by executing:

```bash
composer static-analysis
```

## Code formatting

A standard for code style can be important when working in teams, as it means that less time is spent by developers processing what they are reading (as everything will be consistent).

Code formatting is automated via [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).
PHP-CS-Fixer will not format line lengths which do form part of the PSR-2 coding standards so these will product warnings when checked by [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer).

These can be run by executing:

```bash
composer phpcs
```

### Running everything

All of the tests can be run by executing:

```bash
composer test
```

### Outdated dependencies

Checking for outdated Composer dependencies can be performed by executing:

```bash
composer outdated
```

### Validating Composer configuration

Checking that the [composer.json](composer.json) is valid can be performed by executing:

```bash
composer validate --no-check-publish
```

### Running via GNU Make

If GNU [Make](https://www.gnu.org/software/make/) is installed, you can replace the above `composer` command prefixes with `make`.

All of the tests can be run by executing:

```bash
make test
```

### Running the tests on a Continuous Integration platform (eg. Github Actions)

Specific output formats better suited to CI platforms are included as Composer scripts.

To output unit test coverage in text and Clover XML format (which can be used for services such as [Coveralls](https://coveralls.io/)):

```
composer phpunit:ci
```

To output PHP-CS-Fixer (dry run) and PHPCS results in checkstyle format (which GitHub Actions will use to output a readable format):

```
composer phpcs:ci
```

#### Github Actions

Look at the example in [.github/workflows/main.yml](.github/workflows/main.yml).

## Built With

  - [PHP](https://secure.php.net/)
  - [Composer](https://getcomposer.org/)
  - [PHPUnit](https://phpunit.de/)
  - [Psalm](https://psalm.dev/)
  - [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer)
  - [GNU Make](https://www.gnu.org/software/make/)

## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.
