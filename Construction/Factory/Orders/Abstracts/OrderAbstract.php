<?php


namespace Factory\Orders\Abstracts;

/**
 * Class Order
 * @package Factory\Orders\Abstracts
 */
abstract class OrderAbstract
{
    /**
     * @var double
     */
    protected $quantity;

    /**
     * Order constructor.
     * @param $quantity
     */
    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return bool
     */
    public abstract function validate(): bool;

    public abstract function pay(): void;
}