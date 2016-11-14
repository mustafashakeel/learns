<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Print an Array</title>
</head>
<body>
<?php
	$mixed = array('scooter'=>'Vespa', 'year'=>1977, 'apple', 'children'=>array());

	print_r($mixed);

	echo '<br /><br />';

	var_dump($mixed);

	echo '<br /><br />';

	var_export($mixed);
?>
</body>
</html>
