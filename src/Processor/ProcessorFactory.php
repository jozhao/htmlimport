<?php

/**
 * @file ProcessorFactory.php
 */

namespace HtmlImport\Processor;

use HtmlImport\Exception\RuntimeException;

/**
 * Class ProcessorFactory
 *
 * @package HtmlImport\Processor
 */
class ProcessorFactory implements ProcessorFactoryInterface
{
    /**
     * Load a processor.
     *
     * @param       $processor
     * @param array $options
     *
     * @return mixed
     */
    static function load($processor, $options = array())
    {
        $class = $processor;
        if (!class_exists($class)) {
            throw new RuntimeException("Class '$class' not found");
        }

        return new $class($options);
    }
}
