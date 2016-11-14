<?php // Recipe 28: Create List

require_once('../WDC.php');

$fruits   = array("Apple", "Pear", "Banana", "Plum", "Orange");
$bullets1 = array("1", "A", "a", "I", "i");
$bullets2 = array("disc", "square", "circle");

echo "<table border='0' width='100%'><tr>";

for ($j = 0 ; $j < 5 ; ++$j)
   echo"<td>" . CreateList($fruits, 1, "ol",
      $bullets1[$j]) . "</td>\n";

echo "</tr><tr>";

for ($j = 0 ; $j < 3 ; ++$j)
   echo"<td>" . CreateList($fruits, 1, "ul",
      $bullets2[$j]) . "</td>\n";

echo "<td colspan='2'></td></tr></table>";

?>
