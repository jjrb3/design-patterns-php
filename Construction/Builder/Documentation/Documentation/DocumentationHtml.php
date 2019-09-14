<?php


namespace Builder\Documentation\Documentation;


use Builder\Documentation\Abstracts\DocumentationAbstract;

class DocumentationHtml extends DocumentationAbstract
{
    /**
     * @param $document
     * @return mixed|void
     */
    public function add(string $document): void
    {
        if ($document === 'pdf') {
            $this->container[] = $document;
        }
    }

    /**
     * @return mixed|void
     */
    public function print(): void
    {
        echo 'Document PDF';
    }
}