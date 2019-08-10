<?php


namespace AbstractFactory\Vehicles\Factories;

use AbstractFactory\ElectricScooter;
use AbstractFactory\Vehicles\Car\ElectricCar;
use AbstractFactory\Vehicles\Interfaces\FactoryCarInterface;

/**
 * Class FactoryElectricVehicle
 * @package AbstractFactory\Vehicles\Factories
 */
class ElectricVehicleFactory implements FactoryCarInterface
{
    /**
     * @param string $model
     * @param string $color
     * @param int $power
     * @param float $space
     *
     * @return ElectricCar
     */
    public function createCar(string $model, string $color, int $power, float $space): ElectricCar
    {
        return new ElectricCar($model, $color, $power, $space);
    }

    /**
     * @param string $model
     * @param string $color
     * @param int $power
     *
     * @return ElectricScooter
     */
    public function createScooter(string $model, string $color, int $power): ElectricScooter
    {
        return new ElectricScooter($model, $color, $power);
    }
}