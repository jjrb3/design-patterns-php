<?php


namespace Factory\Orders\Abstracts;

/**
 * Class ClientAbstract
 * @package Factory\Orders\Abstracts
 */
abstract class ClientAbstract
{
    /**
     * @var array
     */
    protected $order = [];

    /**
     * @param float $quantity
     * @return OrderAbstract
     */
    protected abstract function createOrder(float $quantity): OrderAbstract;

    /**
     * @param float $quantity
     */
    public function newOrder(float $quantity): void
    {
        $order = $this->createOrder($quantity);

        if ($order->validate()) {
            $order->pay();
            $this->order[] = $order;
        }
    }
}