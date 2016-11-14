<?php // Recipe 53: Get Guest Book

require_once('../WDC.php');

$result = GetGuestBook('guestbook.txt', 'f');

if (!$result[0]) echo "No posts";
else
{
   for ($j = 0 ; $j < $result[0] ; ++$j)
   {
      echo "<b>Post " . ($j + 1) . "</b>:<br /><br />";
      
      for ($k = 0 ; $k < 4 ; ++$k)
         echo "&nbsp; " . $result[1][$j][$k] . "<br />";
   }
}

?>
