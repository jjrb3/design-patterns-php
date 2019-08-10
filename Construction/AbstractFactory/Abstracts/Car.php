<?php


namespace Construction\AbstractFactory\Abstracts;

/**
 * Class Car
 * @package Construction\AbstractFactory\Abstracts
 */
abstract class Car
{
    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $color;

    /**
     * @var int
     */
    protected $power;

    /**
     * @var float
     */
    protected $space;

    /**
     * Car constructor.
     *
     * @param string $model
     * @param string $color
     * @param int $power
     * @param float $space
     */
    public function __construct(string $model, string $color, int $power, float $space)
    {
        $this->model    = $model;
        $this->color    = $color;
        $this->power    = $power;
        $this->space    = $space;
    }

    /**
     * @return string
     */
    public abstract function showFeatures(): string;
}