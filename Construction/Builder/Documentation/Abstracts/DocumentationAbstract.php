<?php


namespace Builder\Documentation\Abstracts;

/**
 * Class DocumentationAbstract
 * @package Builder\Documentation\Abstracts
 */
abstract class DocumentationAbstract
{
    /**
     * @var array
     */
    protected $container = [];

    /**
     * @param $document
     * @return mixed
     */
    public abstract function add(string $document): void;

    /**
     * @return mixed
     */
    public abstract function print(): void;
}