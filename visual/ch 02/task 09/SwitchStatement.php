<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using the Switch Statement</title>
</head>
<body>
<?php
	$state = 'CA';
	
	switch($state){
		case 'AL':
			echo 'You are in Alabama.';
			break;
		case 'GA':
			echo 'You are in Georgia.';
			break;
		case 'CA':
			echo 'You are in California.';
			break;
	}
?>
</body>
</html>
