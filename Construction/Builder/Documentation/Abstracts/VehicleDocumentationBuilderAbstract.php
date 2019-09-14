<?php


namespace Builder\Documentation\Abstracts;

/**
 * Class VehicleDocumentationBuilder
 * @package Builder\Documentation\Builder
 */
abstract class VehicleDocumentationBuilderAbstract
{
    /**
     * @var string
     */
    protected $document;

    /**
     * @param string $clientName
     */
    public abstract function generateOrderForm(string $clientName): void;

    /**
     * @param string $requestName
     */
    public abstract function generateEnrollmentRequest(string $requestName): void;

    /**
     * @return string
     */
    public function result(): string
    {
        return $this->document;
    }
}