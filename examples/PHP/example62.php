<?php // Recipe 62: Get User From DB

require_once('../WDC.php');

$dbhost = 'localhost'; // Normally no need to change this
$dbname = 'mydb';      // Change to your database name
$dbuser = 'testing';   // Change to your database user name
$dbpass = 'testing';   // Change to your database password

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$table  = 'Users';
$handle = 'firstprez';

$result = GetUserFromDB($table, $handle);

echo "<pre>";
if ($result[0] == FALSE) echo "Lookup failed.";
else echo "Name         = " . $result[1][0] . "<br />" .
          "Handle       = " . $result[1][1] . "<br />" .
          "Pass(salted) = " . $result[1][2] . "<br />" .
          "Email        = " . $result[1][3];

?>
