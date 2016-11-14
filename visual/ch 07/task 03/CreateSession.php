<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Session</title>
</head>
<body>
	<p>Session started.</p>
	<?php
		$id = session_id();
	?>
	<p>Session ID: <?php echo $id;?></p>
</body>
</html>
