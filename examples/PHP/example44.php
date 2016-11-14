<?php // Recipe 44: Create Short URL

require_once('../WDC.php');

$long     = "http://webdevelopmentcookbook.com/foldername/index.html";
$redirect = "go.php";
$len      = 5;
$file     = "shorturls.txt";
$result   = CreateShortURL($long, $redirect, $len, $file);

echo      "The URL '$long' can now be accessed from: ";
echo      "<a href='$result'>$result</a>";

?>
