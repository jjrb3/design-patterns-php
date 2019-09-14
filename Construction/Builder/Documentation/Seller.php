<?php


namespace Builder\Documentation;


use Builder\Documentation\Abstracts\VehicleDocumentationBuilderAbstract;

/**
 * Class Seller
 * @package Builder\Documentation
 */
class Seller
{
    /**
     * @var VehicleDocumentationBuilderAbstract
     */
    protected $constructor;

    /**
     * Seller constructor.
     * @param VehicleDocumentationBuilderAbstract $vehicleDocumentationBuilder
     */
    public function __construct(VehicleDocumentationBuilderAbstract $vehicleDocumentationBuilder)
    {
        $this->constructor = $vehicleDocumentationBuilder;
    }

    /**
     * @param string $clientName
     * @return string
     */
    public function generate(string $clientName): string
    {
        $this->constructor->generateOrderForm($clientName);
        $this->constructor->generateEnrollmentRequest($clientName);

        return $this->constructor->result();
    }
}