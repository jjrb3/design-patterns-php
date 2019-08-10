<?php


namespace AbstractFactory\Vehicles\Factories;

use AbstractFactory\Vehicles\Car\GasolineCar;
use AbstractFactory\Vehicles\Interfaces\FactoryCarInterface;
use AbstractFactory\Vehicles\Scooter\GasolineScooter;

/**
 * Class GasolineVehicleFactory
 * @package AbstractFactory\Vehicles\Factories
 */
class GasolineVehicleFactory implements FactoryCarInterface
{
    /**
     * @param string $model
     * @param string $color
     * @param int $power
     * @param float $space
     *
     * @return GasolineCar
     */
    public function createCar(string $model, string $color, int $power, float $space): GasolineCar
    {
        return new GasolineCar($model, $color, $power, $space);
    }

    /**
     * @param string $model
     * @param string $color
     * @param int $power
     *
     * @return GasolineScooter
     */
    public function createScooter(string $model, string $color, int $power): GasolineScooter
    {
        return new GasolineScooter($model, $color, $power);
    }
}