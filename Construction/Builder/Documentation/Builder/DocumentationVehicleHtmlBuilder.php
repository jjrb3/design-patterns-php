<?php


namespace Builder\Documentation\Builder;


use Builder\Documentation\Abstracts\VehicleDocumentationBuilderAbstract;
use Builder\Documentation\Documentation\DocumentationHtml;

/**
 * Class DocumentationVehicleHtmlBuilder
 * @package Builder\Documentation\Builder
 */
class DocumentationVehicleHtmlBuilder extends VehicleDocumentationBuilderAbstract
{
    /**
     * DocumentationVehicleHtmlBuilder constructor.
     */
    public function __construct()
    {
        $this->document = new DocumentationHtml();
    }

    /**
     * @param string $clientName
     */
    public function generateOrderForm(string $clientName): void
    {
        $this->document->add("Html - Client request: {$clientName}");
    }

    /**
     * @param string $requestName
     */
    public function generateEnrollmentRequest(string $requestName): void
    {
        $this->document->add("Html - Enrollment request {$requestName}");
    }
}