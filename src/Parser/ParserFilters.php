<?php

/**
 * @file ParserFilters.php
 */

namespace HtmlImport\Parser;

/**
 * Class ParserFilters
 */
class ParserFilters
{
    /**
     * strip tags.
     */
    static function stripTags($qp)
    {
        //remove unused tags
        $unusedTags = array(
            'script',
            'noscript',
            'link',
            'style',
            'iframe',
            'noframes',
            'embed',
            'noembed',
            'object',
            'command',
            'canvas',
            'applet',
            'map',
            'menu',
            'svg',
            'form',
            'input',
            'button',
            '.fa', // fontAwesome
            '#skip-link',
            '.hidden',
            '.sr-only',
        );
        foreach ($unusedTags as $tag) {
            $qp->remove($tag);
        }
    }

    /**
     * Clean HTML.
     */
    static function clean($html = '')
    {
        // HTMLPurifier.
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('AutoFormat.RemoveEmpty', true);
        $config->set('Output.TidyFormat', true); // Require HTML tidy.

        // Purifier.
        $purifier = new \HTMLPurifier($config);

        return $purifier->purify($html);
    }
}
