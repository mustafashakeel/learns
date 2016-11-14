<?php

$dom = new DOMDocument();

$dom->load('books.xml');

$books = $dom->getElementsByTagName('book');

foreach($books as $book){
	echo 'Found a book titled: ' . $book->getAttribute('title') . '<br />';
}

?>