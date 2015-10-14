<?php

/**
 * @file ProcessorFactoryInterface.php
 */

namespace HtmlImport\Processor;

/**
 * Interface ProcessorFactoryInterface
 *
 * @package HtmlImport\Processor
 */
interface ProcessorFactoryInterface
{
    /**
     * Load a processor.
     *
     * @param       $processor
     * @param array $options
     *
     * @return mixed
     */
    static function load($processor, $options = array());
}
