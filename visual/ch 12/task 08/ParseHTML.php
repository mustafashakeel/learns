<?php

$dom = new DOMDocument();

$dom->loadHTMLFile('badMarkup.html');

$titles = $dom->getElementsByTagName('title');

echo "The title is: " . $titles->item(0)->nodeValue . "\r\n";

?>