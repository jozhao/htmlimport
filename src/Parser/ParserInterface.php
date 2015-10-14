<?php

/**
 * @file ParserInterface.php
 */

namespace HtmlImport\Parser;

use HtmlImport\Document;

/**
 * Interface ParseInterface
 */
interface ParserInterface
{
    /**
     * @param \HtmlImport\Document\Document $document
     *
     * @return mixed
     */
    public function setDocument(Document\Document $document);

    /**
     * @return mixed
     */
    public function getDocument();

    /**
     * @param $document
     *
     * @return mixed
     */
    public function saveDocument($document);

    /**
     * @return mixed
     */
    public function parse();
}
