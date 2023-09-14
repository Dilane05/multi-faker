# multi-faker
Package for generating Faker by country

## Installation

Install the Package by the following command,

    composer require cupidontech/multi-faker

## Add Provider

Add the provider to your `config/app` into `provider` section if using lower version of laravel,

    Cupidontech\MultiFaker\MultiFakerServiceProvider::class,

## Add the country configuration to your .env file

MULTI_FAKER_DEFAULT_COUNTRY= {Country}
//e.g = MULTI_FAKER_DEFAULT_COUNTRY=Cameroon

