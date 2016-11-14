<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using PHP Constants</title>
</head>
<body>
<?php
	echo 'The version of PHP is: ' . PHP_VERSION . '<br />';
	echo 'The server operating system is: ' . PHP_OS . '<br />';

	echo 'File: ' . __FILE__ . ' on line: ' . __LINE__ . '<br />';
	echo 'File: ' . __FILE__ . ' on line: ' . __LINE__ . '<br />';
?>
</body>
</html>
