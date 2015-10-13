<?php

namespace HtmlImport;

/**
 * Class Document
 * @package HtmlImport
 */
class Document
{
    protected $document = null;

    /**
     * @param null $document
     * @param array $options
     */
    public function __construct($document = null, array $options = array())
    {

    }

    /**
     * @return null
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param null $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }
}
