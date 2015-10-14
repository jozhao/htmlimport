<?php

/**
 * @file DocumentInterface.php
 */

namespace HtmlImport\Document;

/**
 * Interface DocumentInterface
 *
 * @package HtmlImport\Document
 */
interface DocumentInterface
{
    /**
     * Add document.
     *
     * @return mixed
     */
    public function add($source, $options = array());

    /**
     * Load document.
     *
     * @return mixed
     */
    public function load();
}
