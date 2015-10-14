<?php

/**
 * @file DocumentAbstract.php
 */

namespace HtmlImport\Document;

/**
 * Class Document
 *
 * @package HtmlImport
 */
abstract class DocumentAbstract implements DocumentInterface
{
    protected $document;
    protected $options;

    /**
     * DocumentAbstract constructor.
     *
     * @param $options
     */
    public function __construct($source = null, $options = array())
    {
        $this->add($source, $options);
    }

    /**
     * Add document into object.
     *
     * @param $source
     */
    public function add($source, $options = array())
    {
        $this->setQp($source);
    }

    /**
     * Load document as an object.
     *
     * @return mixed
     */
    public function load()
    {
        return self::getQp();
    }

    /**
     * @param $document
     */
    public function save($document)
    {
        $this->setQp($document);
    }

    /**
     * @return mixed
     */
    public function getQp()
    {
        return $this->document;
    }

    /**
     * @param mixed $qp
     */
    public function setQp($source)
    {
        $qp = htmlqp($source);
        $this->document = $qp;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
}
