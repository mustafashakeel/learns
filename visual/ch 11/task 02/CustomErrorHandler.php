<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Custom Error Handler</title>
</head>
<body>
	<?php
		function handleErrors($e_code, $e_desc, $e_file, $e_line){
			echo "<ul>
			<li>Error code: $e_code</li>
			<li>Error description: $e_desc</li>
			<li>Error file: $e_file</li>
			<li>Error line: $e_line</li>
			</ul>";
		}

		set_error_handler('handleErrors');

		echo $notDefined;
	?>
</body>
</html>
