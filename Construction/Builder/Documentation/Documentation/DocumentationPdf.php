<?php


namespace Builder\Documentation\Documentation;


use Builder\Documentation\Abstracts\DocumentationAbstract;

/**
 * Class DocumentationPdf
 * @package Builder\Documentation\Documentation
 */
class DocumentationPdf extends DocumentationAbstract
{
    /**
     * @param $document
     * @return mixed|void
     */
    public function add($document): void
    {
        if ($document === 'html') {
            $this->container[] = $document;
        }
    }

    /**
     * @return mixed|void
     */
    public function print(): void
    {
        echo 'Document HTML';
    }
}