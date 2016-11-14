<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Get a List of Files in a Directory</title>
</head>
<body>
<?php
	if(is_dir('.')){
		if($handle = opendir('.')){
			while(false !== ($file = readdir($handle))){
				echo "The file name is: $file<br />";
			}
		}
		closedir($handle);
	}
?>
</body>
</html>
