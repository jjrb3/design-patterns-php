<?php


namespace Factory\Orders\Client;


use Factory\Orders\Abstracts\ClientAbstract;
use Factory\Orders\Abstracts\OrderAbstract;
use Factory\Orders\Order\DiscountOrder;

/**
 * Class DiscountClient
 * @package Factory\Orders\Client
 */
class DiscountClient extends ClientAbstract
{
    /**
     * @param float $quantity
     * @return OrderAbstract
     */
    protected function createOrder(float $quantity): OrderAbstract
    {
        return new DiscountOrder($quantity);
    }
}