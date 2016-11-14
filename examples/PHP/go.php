<?php // go.php

require_once('../WDC.php');

$file   = "shorturls.txt";
$result = UseShortURL($_GET['u'], $file);
if ($result) header("Location: $result");
else echo "That short URL is unrecognized";

?>
