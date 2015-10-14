<?php

/**
 * @file Parser.php
 */

namespace HtmlImport\Parser;

/**
 * Class Parser
 *
 * @package HtmlImport\Parser
 */
class Parser extends ParserAbstract
{
    /**
     * Parse function.
     */
    public function parse()
    {
        $qp = $this->getDocument()->load();
        $this->stripTags();
        $this->clean();
    }

    /**
     * strip tags.
     */
    public function stripTags()
    {
        $qp = $this->getDocument()->load();
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
    public function clean()
    {
        $qp = $this->getDocument()->load();
        $html = $qp->html();
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('URI.Base', 'http://google.com');
        $config->set('URI.MakeAbsolute', true);
        $config->set('AutoFormat.RemoveEmpty', true);
        $config->set('Output.TidyFormat', true); // Require HTML tidy.
        $config->set(
          'HTML.AllowedElements',
          array(
            'p',
            'div',
            'a',
            'br',
            'table',
            'thead',
            'tbody',
            'tr',
            'th',
            'td',
            'ul',
            'ol',
            'li',
            'b',
            'i',
          )
        );
        $purifier = new \HTMLPurifier($config);
        $clean_html = $purifier->purify($html);
        $qp = htmlqp($clean_html);
        print $clean_html;
    }
}
