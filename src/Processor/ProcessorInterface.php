<?php

/**
 * @file ProcessorInterface.php
 */

namespace HtmlImport\Processor;

use HtmlImport\Document;

/**
 * Interface ProcessorInterface
 *
 * @package HtmlImport\Processor
 */
interface ProcessorInterface
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
    public function process();
}
