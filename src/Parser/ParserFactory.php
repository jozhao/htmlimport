<?php

/**
 * @file ParserFactory.php
 */

namespace HtmlImport\Parser;

use HtmlImport\Exception\RuntimeException;

/**
 * Class ParserFactory
 *
 * @package HtmlImport\Parser
 */
class ParserFactory implements ParserFactoryInterface
{
    /**
     * Load a parser.
     *
     * @param       $parser
     * @param array $options
     *
     * @return mixed
     */
    static function load($parser, $options = array())
    {
        $class = $parser;
        if (!class_exists($class)) {
            throw new RuntimeException("Class '$class' not found");
        }

        return new $class($options);
    }
}
