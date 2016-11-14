<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using Try...Catch Statements</title>
</head>
<body>
	<?php
		try{
			throw new Exception('Generic Exception');
		}catch(Exception $e){
			echo 'An exception was thrown: ' . $e->getMessage();
		}
	?>
</body>
</html>
