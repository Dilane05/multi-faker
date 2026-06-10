# multi-faker

Country-specific fake data generator for PHP — with built-in support for French-speaking African countries and more.

[![Tests](https://github.com/Dilane05/multi-faker/actions/workflows/tests.yml/badge.svg)](https://github.com/Dilane05/multi-faker/actions/workflows/tests.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![Total Downloads](https://img.shields.io/packagist/dt/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![PHP Version](https://img.shields.io/packagist/php-v/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![GitHub License](https://img.shields.io/github/license/Dilane05/multi-faker)](LICENSE.md)

## Table of Contents

- [Why multi-faker?](#why-multi-faker)
- [Supported countries](#supported-countries)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Available methods](#available-methods)
- [Contributions](#contributions)
- [License](#license)

## Why multi-faker?

[FakerPHP](https://fakerphp.org/) covers dozens of locales but has **no locale** for French-speaking African countries (Cameroon, Ivory Coast, Senegal, …). multi-faker fills that gap with realistic, country-specific names, phone numbers, cities, regions, and more.

## Supported countries

| Country | Key |
|---------|-----|
| Cameroon | `Cameroon` |
| Ivory Coast | `IvoryCoast` |
| Nigeria | `Nigeria` |
| Senegal | `Senegal` |
| South Africa | `SouthAfrica` |
| Canada | `Canada` |
| United States | `UnitedStates` |
| France | `France` |
| Germany | `Germany` |

## Requirements

- PHP 8.1+
- Laravel 9, 10, or 11 (optional — works standalone too)

## Installation

```bash
composer require cupidontech/multi-faker
```

Laravel auto-discovers the service provider. For older versions of Laravel, add it manually in `config/app.php`:

```php
'providers' => [
    Cupidontech\MultiFaker\MultiFakerServiceProvider::class,
],
```

## Configuration

Set the default country in your `.env` file:

```env
MULTI_FAKER_DEFAULT_COUNTRY=Cameroon
```

Accepted values: `Cameroon`, `IvoryCoast`, `Nigeria`, `Senegal`, `SouthAfrica`, `Canada`, `UnitedStates`, `France`, `Germany`.

## Usage

### Standalone

```php
use Cupidontech\MultiFaker\MultiFakerGenerator;

$faker = new MultiFakerGenerator('Cameroon');

echo $faker->first_name();   // e.g. "Amina"
echo $faker->phone();        // e.g. "+237 655 123 456"
echo $faker->email();        // e.g. "amina.nkou@gmail.com"
```

### Laravel (dependency injection)

```php
namespace App\Http\Controllers;

use Cupidontech\MultiFaker\MultiFakerGenerator;

class SeedController extends Controller
{
    public function generate(MultiFakerGenerator $faker)
    {
        return [
            'name'    => $faker->first_name() . ' ' . $faker->last_name(),
            'email'   => $faker->email(),
            'phone'   => $faker->phone(),
            'address' => $faker->address(),
        ];
    }
}
```

### Switching country at runtime

```php
$faker = new MultiFakerGenerator('Nigeria');
echo $faker->first_name(); // Nigerian first name

$faker = new MultiFakerGenerator('France');
echo $faker->first_name(); // French first name
```

## Available methods

All generators implement the same interface, regardless of country.

```php
// Identity
$faker->first_name();
$faker->last_name();
$faker->name();          // full name (lowercased)
$faker->username();      // e.g. "aminankou742"
$faker->gender();        // "Male" or "Female"

// Contact
$faker->email();
$faker->phone();

// Location
$faker->address();
$faker->region();
$faker->city($region);   // city in the given region
$faker->cities();        // random city from all regions
$faker->coordinates();   // ['latitude' => ..., 'longitude' => ...]

// Date & security
$faker->date();                                        // default: last 30 years
$faker->date('-10 years', 'now', 'd/m/Y');            // custom range & format
$faker->password();
$faker->creditCardNumber();

// Business & content
$faker->companyName();
$faker->product();
$faker->food();
$faker->text(100);       // random text of given length
```

## Contributions

We welcome contributions. Please follow the git flow below:

1. Fork the repository and clone it locally.
2. Create a feature branch from `dev`: `git checkout -b feature/my-feature dev`
3. Write your code and tests, then commit.
4. Push your branch and open a pull request **targeting `dev`**.
5. Once reviewed and merged to `dev`, a maintainer will cut a release to `main`.

To add a new country, see the [CLAUDE.md](CLAUDE.md) guide.

## License

Distributed under the [MIT](LICENSE.md) license.
