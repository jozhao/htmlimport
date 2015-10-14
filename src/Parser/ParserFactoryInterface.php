<?php

/**
 * @file ParserFactoryInterface.php
 */

namespace HtmlImport\Parser;

/**
 * Class ParserFactoryInterface
 *
 * @package HtmlImport\Parser
 */
interface ParserFactoryInterface
{
    /**
     * Load parser.
     *
     * @param       $parser
     * @param array $options
     *
     * @return mixed
     */
    static function load($parser, $options = array());
}
