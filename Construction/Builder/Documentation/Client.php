<?php


namespace Builder\Documentation;


use Builder\Documentation\Builder\DocumentationVehicleHtmlBuilder;
use Builder\Documentation\Builder\DocumentationVehiclePdfBuilder;

$type = 1;

if ($type === 1) {
    $constructor = new DocumentationVehicleHtmlBuilder();
}
else {
    $constructor = new DocumentationVehiclePdfBuilder();
}

$seller = new Seller($constructor);

$document = $seller->generate('Jeremy');
