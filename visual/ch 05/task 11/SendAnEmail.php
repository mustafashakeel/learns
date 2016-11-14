<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Send an Email</title>
</head>
<body>
<?php
	$sent = mail('php5@tobyjoe.com',
	'Send an Email',
	"This message\r\nIs the result\r\nOf a mail() function call.");

	if($sent){
		echo 'The message was successfully sent.';
	}else{
		echo 'The message was not successfully sent.';
	}
?>
</body>
</html>
