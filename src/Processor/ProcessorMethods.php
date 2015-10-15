<?php

/**
 * @file ProcessorMethods.php
 */

namespace HtmlImport\Processor;

/**
 * Class ProcessorMethods
 *
 * @package HtmlImport\Processor
 */
class ProcessorMethods
{
    /**
     * Split the imported document into sections.
     *
     * Splits the imported HMTL into sections based upon heading elements. This
     * is configurable via a source configuration on import.
     */
    static function createSections($html, $headingLevel = 2)
    {
        $pattern = '~(<h[1-'.$headingLevel.'])~';
        $sectionsArray = preg_split($pattern, $html, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        print_r($sectionsArray);

        $sections = array();
        foreach ($sectionsArray as $key => $item) {
            if (preg_match("/(<h[1-6])/", $item)) {
                $sections[]['level'] = substr($item, 2, 1);
                //$parents[$section['level']] = $key + 1;
                //$sections[]['parent_id'] = $parents[$section['level'] - 1];
            }
        }

        return $sections;
    }
}
