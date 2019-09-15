<?php


namespace Factory\Orders;


use Factory\Orders\Client\CreditClient;
use Factory\Orders\Client\DiscountClient;

$client = new DiscountClient();
$client->newOrder(2000.0);
$client->newOrder(10000.0);

$client = new CreditClient();
$client->newOrder(2000.0);
$client->newOrder(10000.0);