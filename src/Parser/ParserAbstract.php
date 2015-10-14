<?php

/**
 * @file ParserAbstract.php
 */

namespace HtmlImport\Parser;

use HtmlImport\Document;

/**
 * Class ParseAbstract
 *
 * @package HtmlImport\Parse
 */
abstract class ParserAbstract implements ParserInterface
{
    private $_document;
    private $_options;

    /**
     * ParserAbstract constructor.
     *
     * @param $_document
     */
    public function __construct($options = array())
    {
        $this->_options = $options;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->_document;
    }

    /**
     * @param mixed $document
     */
    public function setDocument(Document\Document $document)
    {
        $this->_document = $document;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->_options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->_options = $options;
    }
}
