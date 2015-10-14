<?php

require __DIR__.'../../vendor/autoload.php';

$url = 'http://www.abs.gov.au';

$document = new \HtmlImport\Document\Document($url);

// Parse HTML.
$parser = \HtmlImport\Parser\ParserFactory::load('HtmlImport\Parser\Parser');
$parser->setDocument($document);
$parser->parse();

// Output HTML.
$qp = $document->load();
print $qp->html();
