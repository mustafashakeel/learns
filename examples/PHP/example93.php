<?php // Recipe 93: Get Book From ISBN

require_once('../WDC.php');

$isbn   = '007149216X';
$result = GetBookFromISBN($isbn);
if (!$result) echo "Could not find title for ISBN '$isbn'.";
else echo "<img src='$result[1]' align='left'><b>$result[0]";

?>

