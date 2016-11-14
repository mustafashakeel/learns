<?php // Recipe 94: Get Amazon Sales Rank

require_once('../WDC.php');

$isbn   = '007149216X';
$result = GetBookFromISBN($isbn);
if (!$result) echo "Could not find title for ISBN '$isbn'.";
else
{
   echo "<img src='$result[1]' align='left'><b>$result[0]<br>" .
        "Amazon.com Sales Rank: ";
   echo GetAmazonSalesRank($isbn, 'amazon.com');
}

?>
