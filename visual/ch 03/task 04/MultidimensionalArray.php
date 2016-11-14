<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Multidimensional Array</title>
</head>
<body>
<?php
	$albums = array();
	$albums[0] = array('artist'=>'Les Savy Fav', 'title'=>'The Cat and the Cobra');
	$albums[1] = array('artist'=>'The Postal Service', 'title'=>'Give Up');
	$albums[2] = array('artist'=>'Sonic Youth', 'title'=>'Sonic Nurse');

	$title = $albums[1]['title'];

	echo "The title of the second album in the list is: $title.<br />";
?>
</body>
</html>
