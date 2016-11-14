<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Work with Unicode Text</title>
</head>
<body>
<?php
	$str = "<h1>Piñata</h1>";

	$utf = utf8_encode($str);

	echo "$utf<br />";

	$iso = utf8_decode($utf);

	echo "$iso<br />";
?>
</body>
</html>
