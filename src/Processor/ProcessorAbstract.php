<?php

/**
 * @file ProcessorAbstract.php
 */

namespace HtmlImport\Processor;

use HtmlImport\Document;

/**
 * Class ProcessorAbstract
 *
 * @package HtmlImport\Processor
 */
abstract class ProcessorAbstract extends ProcessorMethods implements ProcessorInterface
{
    private $_options;
    private $_document;
    private $_headers;
    private $_content;

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
     * @param \HtmlImport\Document\Document $document
     */
    public function saveDocument($document)
    {
        $this->_document->save($document);
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->_headers;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers)
    {
        $this->_headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_document->load()->top('body')->innerHtml();
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->_document->save($content);
    }

    /**
     * Process function.
     */
    public function process()
    {
        $content = $this->getContent();
        $sections = self::createSections($content);
    }
}
