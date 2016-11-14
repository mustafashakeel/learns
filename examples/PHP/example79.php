<?php // Recipe 79: Search Google Books

require_once('../WDC.php');

$search = "Mark Twain";

echo "<font face='Arial' size='2'>Google Books results " .
     "for: <b>$search</b>:<br /><br />";

$result = SearchGoogleBooks($search, 1, 20, 'none');

if (!$result[0]) echo "No books found for $search.";
else
{
   foreach($result[1] as $book)
   {
      echo "<img src='$book[5]' align='left' border='1'>";
      echo "<a href='$book[6]'>$book[0]</a> ($book[2], " .
           "$book[3])<br />$book[4]";
      if ($book[7]) echo " (<a href='$book[7]'>preview</a>)";
      echo "<br clear='left'/><br />";
   }
}

?>
