<?php

$dom = new DOMDocument();

$lib = $dom->createElement('library');

$lib = $dom->appendChild($lib);

$success = $dom->save('newLibrary.xml');

echo "$success bytes written.";

?>