<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Write to a File</title>
</head>
<body>
<?php
	$handle = fopen('access_log.txt', 'w+');
	
	$data = "User:Toby\tIP:127.0.0.1\r";

	$success = fwrite($handle, $data);

	fclose($handle);
	
	if($success){
		echo 'The write operation was successful.';
	}else{
		echo 'The write operation was unsuccessful.';
	}
?>
</body>
</html>
