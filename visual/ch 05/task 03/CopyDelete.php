<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Copy or Delete a File</title>
</head>
<body>
<?php
	if(file_exists('access_log.txt')){
		$copied = copy('access_log.txt', 'access_log.txt.bak');
	}

	if($copied){
		$unlinked = unlink('access_log.txt.bak');
	}

	echo "The result of the copy operation was: $copied.<br />";
	echo "The result of the unlink operation was: $unlinked.<br />";
?>
</body>
</html>
