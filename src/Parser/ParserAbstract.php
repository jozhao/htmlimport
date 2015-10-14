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
abstract class ParserAbstract extends ParserFilters implements ParserInterface
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
     * @param \HtmlImport\Document\Document $document
     */
    public function saveDocument($document)
    {
        $this->_document->save($document);
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
     * Parse function.
     */
    public function parse()
    {
        $qp = $this->getDocument()->load();
        $html = $qp->html();
        // Strip tags.
        self::stripTags($qp);
        // Clean and save document.
        $this->saveDocument(self::clean($html));
    }
}
