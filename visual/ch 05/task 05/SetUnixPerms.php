<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Set Unix File Permissions</title>
</head>
<body>
<?php
	$group = chgrp('access_log.txt', 'www');

	echo "The result of chgrp was: $group.<br />";

	$owner = chown('access_log.txt', 'www');

	echo "The result of chown was: $owner.<br />";

	$perms = chmod('access_log.txt', 0755);

	echo "The result of chmod was: $perms.<br />";
?>
</body>
</html>
