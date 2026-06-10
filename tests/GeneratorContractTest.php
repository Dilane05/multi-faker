<?php

namespace Cupidontech\MultiFaker\Tests;

use PHPUnit\Framework\TestCase;
use Cupidontech\MultiFaker\Contracts\FakerGeneratorInterface;

class GeneratorContractTest extends TestCase
{
    public static function generatorProvider(): array
    {
        return [
            'Cameroon'     => [\Cupidontech\MultiFaker\Country\Africa\CameroonFakerGenerator::class],
            'IvoryCoast'   => [\Cupidontech\MultiFaker\Country\Africa\IvoryCoastFakerGenerator::class],
            'Nigeria'      => [\Cupidontech\MultiFaker\Country\Africa\NigeriaFakerGenerator::class],
            'Senegal'      => [\Cupidontech\MultiFaker\Country\Africa\SenegalFakerGenerator::class],
            'SouthAfrica'  => [\Cupidontech\MultiFaker\Country\Africa\SouthAfricaFakerGenerator::class],
            'Canada'       => [\Cupidontech\MultiFaker\Country\America\CanadaFakerGenerator::class],
            'UnitedStates' => [\Cupidontech\MultiFaker\Country\America\UnitedStatesFakerGenerator::class],
            'France'       => [\Cupidontech\MultiFaker\Country\Europe\FranceFakerGenerator::class],
            'Germany'      => [\Cupidontech\MultiFaker\Country\Europe\GermanyFakerGenerator::class],
        ];
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_generator_implements_interface(string $class): void
    {
        $this->assertTrue(
            is_a($class, FakerGeneratorInterface::class, true),
            "$class doit implémenter FakerGeneratorInterface"
        );
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_first_name_returns_non_empty_string(string $class): void
    {
        $generator = new $class();
        $result = $generator->first_name();
        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_last_name_returns_non_empty_string(string $class): void
    {
        $generator = new $class();
        $result = $generator->last_name();
        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_phone_returns_non_empty_string(string $class): void
    {
        $generator = new $class();
        $result = $generator->phone();
        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_email_returns_valid_format(string $class): void
    {
        $generator = new $class();
        $result = $generator->email();
        $this->assertIsString($result);
        $this->assertStringContainsString('@', $result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_coordinates_returns_latitude_and_longitude(string $class): void
    {
        $generator = new $class();
        $result = $generator->coordinates();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('latitude', $result);
        $this->assertArrayHasKey('longitude', $result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_region_returns_non_empty_string(string $class): void
    {
        $generator = new $class();
        $result = $generator->region();
        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_city_accepts_region_and_returns_string(string $class): void
    {
        $generator = new $class();
        $region = $generator->region();
        $result = $generator->city($region);
        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }
}
