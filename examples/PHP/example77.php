<?php // Recipe 77: Get Yahoo! Stock News

require_once('../WDC.php');

$stock   = "AAPL";
$results = GetYahooStockNews($stock);
echo "<font face='Arial' size='2'>Fetching recent news " .
     "stories for: <b>$stock</b>:<br /><br />";

if (!$results[0]) echo "No stories found for $stock.";
else
{
   echo "<a href='http://finance.yahoo.com/q?s=$stock'>".
        "<img src='" . $results[1][0] . "' border='1' />" .
        '</a><br /><br />';

   foreach($results[2] as $result)
      echo "<a href='$result[4]'>$result[0]</a> " .
           "($result[1], $result[2])<br />$result[3]" .
           '<br /><br />';
}

?>
