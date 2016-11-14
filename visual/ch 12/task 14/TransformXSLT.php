<?php

$xml = new DOMDocument();

$xml->load('books.xml');

$xsl = new DOMDocument();

$xsl->load('style.xsl');

$xslt = new XSLTProcessor();

$xslt->importStylesheet($xsl);

$result = $xslt->transformToXML($xml);

echo $result;

?>