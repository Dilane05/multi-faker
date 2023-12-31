<?php

namespace Cupidontech\MultiFaker;

use Faker\Generator as BaseGenerator;
use Cupidontech\MultiFaker\CameroonFakerGenerator;
use Illuminate\Support\Str;

class MultiFakerGenerator extends BaseGenerator
{
    protected $countryGenerator;


    // public function __construct()
    // {

    //     $country = config('multi-faker.default_country');
    //     $generatorClass = "Cupidontech\\src\\MultiFaker\\{$country}FakerGenerator";

    //     if (!class_exists($generatorClass)) {
    //         throw new \Exception("Generator class for {$country} does not exist.");
    //     }

    //     $generator = app(FakerGenerator::class);

    //     parent::__construct($generator);
    //     $this->countryGenerator = new $generatorClass($generator);
    // }

    // public function __construct()
    // {
    //     // Créez une instance de CameroonFakerGenerator
    //     $cameroonGenerator = new CameroonFakerGenerator();

    //     parent::__construct();
    //     $this->countryGenerator = $cameroonGenerator;
    // }

    public function __construct()
    {
        $country = env('MULTI_FAKER_DEFAULT_COUNTRY');
        $countryFilter = new CountryFilter();
        $continent = $countryFilter->getContinentByCountry($country);
        $country = Str::studly($country);
        $generatorClass = "Cupidontech\\MultiFaker\\Country\\{$continent}\\{$country}FakerGenerator";

        if (!class_exists($generatorClass)) {
            throw new \Exception("Generator class for {$country} does not exist.");
        }

        $this->countryGenerator = new $generatorClass();
    }


    public function __call($method, $parameters)
    {
        return $this->countryGenerator->{$method}(...$parameters);
    }
}
