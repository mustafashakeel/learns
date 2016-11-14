<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Subscribe</title>
</head>
<body>
<?php
	if(isset($_FILES['photo'])){
		$file = $_FILES['photo'];
	}else{
		echo '<strong>No file was uploaded.</strong>';
		exit();
	}

	$name = $file['tmp_name'];

	if($file['error'] > 0){
		echo '<strong>There was an error with the file upload: ' . $file['error'] . '</strong>';
		exit();
	}

	$success = move_uploaded_file($name, './uploads/uploaded.jpg');

	if($success){
		echo 'The file upload was successful.';
	}else{
		echo 'There was a problem moving the uploaded file.';
	}
?>
</body>
</html>
