<?php

include_once 'vehicle.php';

$car        = Vehicle::create('car', 4);
$motorcycle = Vehicle::create('motorcycle', 2);

echo "{$car->getType()}: tiene {$car->wheels} ruedas <br>";
echo "{$motorcycle->getType()}: tiene {$motorcycle->wheels} ruedas <br>";