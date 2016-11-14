<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Change PHP's Error Reporting Level</title>
</head>
<body>
	<?php
		echo $notDefined;
	
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	?>
</body>
</html>
