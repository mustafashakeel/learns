<?php

require_once('../WDC.php');

echo "<form method='post' action='$_SERVER[PHP_SELF]'>";
echo "<input type='text' name='password' />";
echo "<input type='submit' /></form>";
if (isset($_POST['password']))
{
   $text     = $_POST['password'];
   $allowed  = "a-zA-Z0-9 !&*+=:;@~#";
   $required = "ludp";
   $result    = ValidateText($text, 10, 16, $allowed, $required);
   if ($result[0] == FALSE)
      for ($j = 0 ; $j < count($result[1]) ; ++$j)
         echo $result[1][$j] . ".<br>";
   else echo "Password validated";
}

?>
