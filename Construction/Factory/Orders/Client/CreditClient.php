<?php


namespace Factory\Orders\Client;


use Factory\Orders\Abstracts\ClientAbstract;
use Factory\Orders\Abstracts\OrderAbstract;
use Factory\Orders\Order\CreditOrder;

/**
 * Class CreditClient
 * @package Factory\Orders\Client
 */
class CreditClient extends ClientAbstract
{
    /**
     * @param float $quantity
     * @return OrderAbstract
     */
    protected function createOrder(float $quantity): OrderAbstract
    {
        return new CreditOrder($quantity);
    }
}