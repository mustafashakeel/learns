<?php

$xml = simplexml_load_file('test.xml');

echo '<ul>';
foreach($xml->book as $book){
	echo '<li>' . $book['title'] . '</li>';
}
echo '</ul>';

?>