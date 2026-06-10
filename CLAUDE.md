# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

`cupidontech/multi-faker` is a PHP Composer library that generates country-specific fake data. It is designed as a Laravel package but can be used standalone. The active country is selected at runtime via an environment variable.

## Commands

```bash
# Install dependencies
composer install

# Install ignoring platform PHP version constraints
composer install --ignore-platform-reqs

# Dump autoloader after adding new classes
composer dump-autoload
```

There is no test suite configured in this project.

## Architecture

### Request flow

1. `MultiFakerGenerator::__construct()` reads `MULTI_FAKER_DEFAULT_COUNTRY` from the environment.
2. `CountryFilter::getContinentByCountry()` maps the country name to a continent string (e.g. `"Cameroon"` → `"Africa"`).
3. The country name is passed through `Str::studly()` to normalise casing (e.g. `"ivory_coast"` → `"IvoryCoast"`).
4. The fully-qualified class name is built as `Cupidontech\MultiFaker\Country\{Continent}\{Country}FakerGenerator` and instantiated.
5. `MultiFakerGenerator::__call()` delegates every method call to that country instance.

### Adding a new country

1. Add an entry to `CountryFilter::$countryToContinent` in [src/CountryFilter.php](src/CountryFilter.php).
2. Create `src/Country/{Continent}/{Country}FakerGenerator.php` extending `Faker\Generator`.
3. Implement the formatter methods: `first_name()`, `last_name()`, `gender()`, `address()`, `phone()`, `email()`, `date()`, `region()`, `city($region)`, `cities()`, `coordinates()`, `password()`, `text($length)`, `companyName()`, `creditCardNumber()`, `product()`, `food()`, `username()`.

Look at [src/Country/Africa/CameroonFakerGenerator.php](src/Country/Africa/CameroonFakerGenerator.php) or [src/Country/Europe/FranceFakerGenerator.php](src/Country/Europe/FranceFakerGenerator.php) as implementation references.

### Namespace & autoloading

PSR-4 root: `Cupidontech\MultiFaker\` → `src/`. Country generators follow the sub-namespace `Cupidontech\MultiFaker\Country\{Continent}\`.

### Laravel integration

`MultiFakerServiceProvider` registers `MultiFakerGenerator` as a singleton. Auto-discovery is configured in `composer.json` under `extra.laravel.providers`. For older Laravel versions, add the provider manually to `config/app.php`.

## Known issues

- Several country generator data arrays contain heavily duplicated entries (visible in `CameroonFakerGenerator`).
- `FranceFakerGenerator::cities()` includes Greek city names — likely a copy-paste error from a previous edit.
