<?php

require __DIR__.'/../../vendor/autoload.php';

$url = __DIR__.'/simple.html';

$document = new \HtmlImport\Document\Document($url);

// Parse HTML.
$parser = \HtmlImport\Parser\ParserFactory::load('HtmlImport\Parser\Parser');
$parser->setDocument($document);
$parser->parse();

// ProcessHTML.
$processor = \HtmlImport\Processor\ProcessorFactory::load('HtmlImport\Processor\Processor');
$processor->setDocument($document);
$processor->process();

// Output HTML.
//$qp = $document->load();
//print $qp->html();
