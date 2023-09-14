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
        $defaultCountry = env('MULTI_FAKER_DEFAULT_COUNTRY');
        $country = Str::studly($defaultCountry);
        $generatorClass = "Cupidontech\\MultiFaker\\{$country}FakerGenerator";

        if (!class_exists($generatorClass)) {
            throw new \Exception("Generator class for {$defaultCountry} does not exist.");
        }

        $this->countryGenerator = new $generatorClass();
    }


    public function __call($method, $parameters)
    {
        return $this->countryGenerator->{$method}(...$parameters);
    }
}
