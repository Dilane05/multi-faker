<?php

namespace Cupidontech\MultiFaker\Tests;

use PHPUnit\Framework\TestCase;

class DataQualityTest extends TestCase
{
    public static function generatorProvider(): array
    {
        return GeneratorContractTest::generatorProvider();
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_username_uses_country_generator_not_faker_locale(string $class): void
    {
        $generator = new $class();
        $username = $generator->username();

        $this->assertIsString($username);
        $this->assertNotEmpty($username);
        $this->assertDoesNotMatchRegularExpression('/\s/', $username);
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_coordinates_within_country_bounds(string $class): void
    {
        $generator = new $class();
        $bounds = $this->countryBounds($class);

        for ($i = 0; $i < 5; $i++) {
            $coords = $generator->coordinates();
            $this->assertGreaterThanOrEqual($bounds['south'], $coords['latitude']);
            $this->assertLessThanOrEqual($bounds['north'], $coords['latitude']);
            $this->assertGreaterThanOrEqual($bounds['west'], $coords['longitude']);
            $this->assertLessThanOrEqual($bounds['east'], $coords['longitude']);
        }
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_city_matches_region(string $class): void
    {
        $generator = new $class();

        for ($i = 0; $i < 10; $i++) {
            $region = $generator->region();
            $city = $generator->city($region);
            $this->assertIsString($city);
            $this->assertNotEmpty($city);
        }
    }

    /**
     * @dataProvider generatorProvider
     */
    public function test_email_uses_example_domain(string $class): void
    {
        $generator = new $class();
        $email = $generator->email();

        $this->assertStringContainsString('@example.', $email);
    }

    private function countryBounds(string $class): array
    {
        $map = [
            \Cupidontech\MultiFaker\Country\Africa\CameroonFakerGenerator::class => [
                'north' => 13.1, 'south' => 2.3, 'west' => 8.4, 'east' => 16.1,
            ],
            \Cupidontech\MultiFaker\Country\Africa\IvoryCoastFakerGenerator::class => [
                'north' => 10.8, 'south' => 4.3, 'west' => -8.6, 'east' => -2.5,
            ],
            \Cupidontech\MultiFaker\Country\Africa\NigeriaFakerGenerator::class => [
                'north' => 13.9, 'south' => 4.2, 'west' => 2.6, 'east' => 14.7,
            ],
            \Cupidontech\MultiFaker\Country\Africa\SenegalFakerGenerator::class => [
                'north' => 16.7, 'south' => 12.3, 'west' => -17.8, 'east' => -11.3,
            ],
            \Cupidontech\MultiFaker\Country\Africa\SouthAfricaFakerGenerator::class => [
                'north' => -22.1, 'south' => -34.9, 'west' => 16.4, 'east' => 32.9,
            ],
            \Cupidontech\MultiFaker\Country\America\CanadaFakerGenerator::class => [
                'north' => 83.2, 'south' => 41.6, 'west' => -141.0, 'east' => -52.6,
            ],
            \Cupidontech\MultiFaker\Country\America\UnitedStatesFakerGenerator::class => [
                'north' => 49.4, 'south' => 24.4, 'west' => -125.0, 'east' => -66.9,
            ],
            \Cupidontech\MultiFaker\Country\Europe\FranceFakerGenerator::class => [
                'north' => 51.2, 'south' => 41.3, 'west' => -5.2, 'east' => 9.6,
            ],
            \Cupidontech\MultiFaker\Country\Europe\GermanyFakerGenerator::class => [
                'north' => 55.1, 'south' => 47.2, 'west' => 5.8, 'east' => 15.1,
            ],
        ];

        return $map[$class];
    }
}
