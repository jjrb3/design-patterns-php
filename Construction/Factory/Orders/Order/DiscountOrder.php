<?php


namespace Factory\Orders\Order;


use Factory\Orders\Abstracts\OrderAbstract;

/**
 * Class CreditOrder
 * @package Factory\Orders\Order
 */
class DiscountOrder extends OrderAbstract
{
    /**
     * DiscountOrder constructor.
     * @param float $quantity
     */
    public function __construct(float $quantity)
    {
        parent::__construct($quantity);
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
    
    public function pay(): void
    {
        echo 'El pago del pedido al contado de: ' . number_format($this->quantity) . ' se ha realizado';
    }
}