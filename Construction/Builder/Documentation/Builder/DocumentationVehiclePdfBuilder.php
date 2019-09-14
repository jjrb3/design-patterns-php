<?php


namespace Builder\Documentation\Builder;


use Builder\Documentation\Abstracts\VehicleDocumentationBuilderAbstract;
use Builder\Documentation\Documentation\DocumentationPdf;

/**
 * Class DocumentationVehiclePdfBuilder
 * @package Builder\Documentation\Builder
 */
class DocumentationVehiclePdfBuilder extends VehicleDocumentationBuilderAbstract
{
    /**
     * DocumentationVehicleHtmlBuilder constructor.
     */
    public function __construct()
    {
        $this->document = new DocumentationPdf();
    }

    /**
     * @param string $clientName
     */
    public function generateOrderForm(string $clientName): void
    {
        $this->document->add("Pdf - Client request: {$clientName}");
    }

    /**
     * @param string $requestName
     */
    public function generateEnrollmentRequest(string $requestName): void
    {
        $this->document->add("Pdf - Enrollment request {$requestName}");
    }
}