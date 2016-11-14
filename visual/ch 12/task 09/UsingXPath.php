<?php

$dom = new DOMDocument();

$dom->load('books.xml');

$xp = new DOMXPath($dom);

$result = $xp->query('/library/book[@authorid=1001]');

foreach($result as $book){
	echo "Found a book with the title: " . $book->getAttribute('title') . "<br />";
}

?>