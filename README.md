# multi-faker

**The missing Faker locale for Africa.**

Generate realistic fake data for African and international applications.

```php
use Cupidontech\MultiFaker\MultiFakerGenerator;

$faker = new MultiFakerGenerator('Cameroon');

echo $faker->name();     // Jean Baptiste Ndzié
echo $faker->phone();    // +237 677 123 456
echo $faker->address();  // Bonamoussadi, Douala
```

[![Tests](https://github.com/Dilane05/multi-faker/actions/workflows/tests.yml/badge.svg)](https://github.com/Dilane05/multi-faker/actions/workflows/tests.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![Total Downloads](https://img.shields.io/packagist/dt/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![PHP Version](https://img.shields.io/packagist/php-v/cupidontech/multi-faker)](https://packagist.org/packages/cupidontech/multi-faker)
[![GitHub License](https://img.shields.io/github/license/Dilane05/multi-faker)](LICENSE.md)

---

## Table of Contents

- [The Problem](#the-problem)
- [FakerPHP vs multi-faker](#fakephp-vs-multi-faker)
- [Supported Countries](#supported-countries)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Example Output](#example-output)
- [Available Methods](#available-methods)
- [Roadmap](#roadmap)
- [Contributions](#contributions)
- [License](#license)

---

## The Problem

FakerPHP supports many locales but provides no realistic datasets for most African countries.

| Country | FakerPHP | multi-faker |
|---------|----------|-------------|
| Cameroon | ❌ | ✅ |
| Senegal | ❌ | ✅ |
| Ivory Coast | ❌ | ✅ |
| Nigeria | Limited | ✅ |
| South Africa | Limited | ✅ |
| France | ✅ | ✅ |
| USA | ✅ | ✅ |

As a result, developers often seed African applications with unrealistic names, cities, and phone numbers. multi-faker solves this with country-specific generators built from real local datasets.

---

## FakerPHP vs multi-faker

| Feature | FakerPHP | multi-faker |
|---------|----------|-------------|
| Local names | ❌ (for Africa) | ✅ |
| Local phone formats | ❌ | ✅ |
| Local regions | ❌ | ✅ |
| Local cities | ❌ | ✅ |
| GPS coordinates | ❌ | ✅ |
| Switch country at runtime | ❌ | ✅ |
| Laravel integration | ✅ | ✅ |

---

## Supported Countries

| Country | Key |
|---------|-----|
| 🇨🇲 Cameroon | `Cameroon` |
| 🇨🇮 Ivory Coast | `IvoryCoast` |
| 🇳🇬 Nigeria | `Nigeria` |
| 🇸🇳 Senegal | `Senegal` |
| 🇿🇦 South Africa | `SouthAfrica` |
| 🇨🇦 Canada | `Canada` |
| 🇺🇸 United States | `UnitedStates` |
| 🇫🇷 France | `France` |
| 🇩🇪 Germany | `Germany` |

---

## Features

| Feature | Supported |
|---------|-----------|
| First & last names | ✅ |
| Full names & usernames | ✅ |
| Email addresses | ✅ |
| Phone numbers (local format) | ✅ |
| Addresses | ✅ |
| Regions & cities | ✅ |
| GPS coordinates | ✅ |
| Company names | ✅ |
| Products & food items | ✅ |
| Dates | ✅ |
| Passwords & credit cards | ✅ |
| Random text | ✅ |
| Mobile money / payments | ✅ |

---

## Requirements

- PHP 8.1+
- Laravel 9, 10, or 11 (optional — works standalone too)

---

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

---

## Configuration

Set the default country in your `.env` file:

```env
MULTI_FAKER_DEFAULT_COUNTRY=Cameroon
```

Accepted values: `Cameroon`, `IvoryCoast`, `Nigeria`, `Senegal`, `SouthAfrica`, `Canada`, `UnitedStates`, `France`, `Germany`.

---

## Usage

### Standalone

```php
use Cupidontech\MultiFaker\MultiFakerGenerator;

$faker = new MultiFakerGenerator('Cameroon');

echo $faker->first_name();  // e.g. "Amina"
echo $faker->phone();       // e.g. "+237 655 123 456"
echo $faker->email();       // e.g. "amina.nkou@gmail.com"
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

### Laravel Seeder

```php
use Cupidontech\MultiFaker\MultiFakerGenerator;

$faker = new MultiFakerGenerator('Senegal');

User::factory()->count(100)->create([
    'name'  => $faker->name(),
    'phone' => $faker->phone(),
    'city'  => $faker->cities(),
]);
```

### Switching country at runtime

```php
$faker = new MultiFakerGenerator('Nigeria');
echo $faker->first_name(); // Nigerian first name

$faker = new MultiFakerGenerator('France');
echo $faker->first_name(); // French first name
```

---

## Example Output

### 🇨🇲 Cameroon

```
name()      → Jean Baptiste Ndzié
phone()     → +237 677 123 456
address()   → Bonamoussadi, Douala
region()    → Littoral
city()      → Bafoussam
email()     → jean.ndzié@gmail.com
```

### 🇸🇳 Senegal

```
name()      → Mamadou Diop
phone()     → +221 77 123 45 67
region()    → Dakar
city()      → Thiès
```

### 🇳🇬 Nigeria

```
name()      → Chukwuemeka Obi
phone()     → +234 803 123 4567
region()    → Lagos
city()      → Abuja
```

---

## Available Methods

All generators implement the same interface, regardless of country.

```php
// Identity
$faker->first_name();
$faker->last_name();
$faker->name();           // full name
$faker->username();       // e.g. "aminankou742"
$faker->gender();         // "Male" or "Female"

// Contact
$faker->email();
$faker->phone();

// Location
$faker->address();
$faker->region();
$faker->city($region);    // city in the given region
$faker->cities();         // random city from all regions
$faker->coordinates();    // ['latitude' => ..., 'longitude' => ...]

// Date & security
$faker->date();                              // default: last 30 years
$faker->date('-10 years', 'now', 'd/m/Y');  // custom range & format
$faker->password();
$faker->creditCardNumber();

// Business & content
$faker->companyName();
$faker->product();
$faker->food();
$faker->text(100);        // random text of given length

// Mobile money & payments
$faker->orangeMoneyNumber();        // mobile money phone number for the country
$faker->orangeMoneyTransactionId(); // transaction reference (e.g. "OM237260610001234")
$faker->orangeMoneyBalance();       // balance as int in local currency
```

The mobile money methods are contextual — they use the dominant payment platform per country:

| Country | Platform |
|---------|----------|
| 🇨🇲 Cameroon | Orange Money CM |
| 🇨🇮 Ivory Coast | Orange Money CI |
| 🇸🇳 Senegal | Orange Money SN |
| 🇳🇬 Nigeria | MTN MoMo |
| 🇿🇦 South Africa | MTN MoMo SA |
| 🇨🇦 Canada | Interac e-Transfer |
| 🇺🇸 United States | Venmo / CashApp |
| 🇫🇷 France | Orange Bank |
| 🇩🇪 Germany | PayPal / Klarna |

---

## Roadmap

- [x] 🇨🇲 Cameroon
- [x] 🇨🇮 Ivory Coast
- [x] 🇳🇬 Nigeria
- [x] 🇸🇳 Senegal
- [x] 🇿🇦 South Africa
- [x] 🇫🇷 France
- [x] 🇨🇦 Canada
- [x] 🇺🇸 United States
- [x] 🇩🇪 Germany
- [ ] 🇨🇬 Congo
- [ ] 🇬🇦 Gabon
- [ ] 🇧🇯 Benin
- [ ] 🇹🇬 Togo
- [ ] 🇧🇫 Burkina Faso
- [ ] 🇲🇱 Mali
- [ ] 🇬🇭 Ghana
- [ ] 🇰🇪 Kenya

---

## Contributions

We welcome contributions. Please follow the git flow below:

1. Fork the repository and clone it locally.
2. Create a feature branch from `dev`: `git checkout -b feature/my-feature dev`
3. Write your code and tests, then commit.
4. Push your branch and open a pull request **targeting `dev`**.
5. Once reviewed and merged to `dev`, a maintainer will cut a release to `main`.

To add a new country, see the [CLAUDE.md](CLAUDE.md) guide.

---

## License

Distributed under the [MIT](LICENSE.md) license.
