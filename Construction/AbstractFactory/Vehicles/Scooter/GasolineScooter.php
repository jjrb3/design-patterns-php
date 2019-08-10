<?php


namespace AbstractFactory;


use AbstractFactory\Vehicles\Abstracts\ScooterAbstract;

/**
 * Class GasolineCar
 * @package AbstractFactory
 */
class GasolineScooter extends ScooterAbstract
{
    /**
     * GasolineScooter constructor.
     *
     * @param string $model
     * @param string $color
     * @param int $power
     */
    public function __construct(string $model, string $color, int $power)
    {
        parent::__construct($model, $color, $power);
    }

    /**
     * @return string
     */
    public function showFeatures(): string
    {
        return "Model gasoline car: {$this->model}, "
            . "color {$this->color}, "
            . "power {$this->power} and "
            . "space {$this->color}.";
    }
}