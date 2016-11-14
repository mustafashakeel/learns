<?php // Recipe 35: Validate Text

require_once('../WDC.php');

$text     = "This is some example text - let's test it!";
$allowed  = "a-zA-Z0-9 ";
$required = "";
$result = ValidateText($text, 1, 30, $allowed, $required);
echo "$text<br /><br />";

if ($result[0] == FALSE)
   for ($j = 0 ; $j < count($result[1]) ; ++$j)
      echo "&nbsp; " . $result[1][$j] . ".<br>";
else echo "&nbsp; Passed evaluation";

$text     = "password";
$allowed  = "a-zA-Z0-9 !&*+=:;@~#";
$required = "ludp";
$result = ValidateText($text, 10, 16, $allowed, $required);
echo "<br />$text<br /><br />";

if ($result[0] == FALSE)
   for ($j = 0 ; $j < count($result[1]) ; ++$j)
      echo "&nbsp; " . $result[1][$j] . ".<br>";
else echo "&nbsp; Passed evaluation";

?>
