<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Save Session Data to a File</title>
</head>
<body>
	<?php
		$_SESSION['firstname'] = 'Toby';
		$_SESSION['lastname'] = 'Boudreaux';

		$fh = fopen('session.txt', 'w+');
		$data = session_encode();

		fwrite($fh, $data);
		fclose($fh);
	?>
</body>
</html>
