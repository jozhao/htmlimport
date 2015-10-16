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
     * Splits the imported HMTL into sections based upon heading elements.
     */
    static function createSections($html, $headingLevel = 2)
    {
        $qp = htmlqp($html, 'h1,h2,h3,h4,h5,h6');
        // Loop headings.
        foreach ($qp as $key => $item) {
            $level = substr($item->tag(), 1);
            $parent = $level - 1;
            $children = array();

            $content = self::getSectionContent($item);

            $sections[] = array(
              'id' => $key,
              'level' => $level,
              'title' => $item->html(),
              'content' => $content,
              'context' => array(
                'parent' => array(),
                'children' => $children,
                'tag' => $item->tag(),
              ),
            );
        }


        echo "<pre>";
        print_r($sections);
        echo "</pre>";

        //return $sections;
    }


    /**
     * Get section content.
     *
     * @param $html
     * @param $item
     *
     * @return string
     */
    static function getSectionContent($item)
    {
        $raw = '';

        // Scraping content until headings tag.
        $scraped = $item->nextUntil('h1,h2,h3,h4,h5,h6');
        foreach ($scraped as $i) {
            $raw .= $i->html();
        }

        return $raw;
    }
}
