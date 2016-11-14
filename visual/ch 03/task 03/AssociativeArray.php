<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create an Associative Array</title>
</head>
<body>
<?php
	$book = array('author'=>'Toby', 'subject'=>'PHP5'); 

	$writer = $book['author'];

	echo "The author of the book is $writer.<br />";
?>
</body>
</html>
