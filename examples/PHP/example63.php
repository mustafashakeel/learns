<?php // Recipe 63: Verify User In DB

require_once('../WDC.php');

$dbhost = 'localhost'; // Normally no need to change this
$dbname = 'mydb';      // Change to your database name
$dbuser = 'testing';   // Change to your database user name
$dbpass = 'testing';   // Change to your database password

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$table  = 'Users';
$salt1  = "F^&£g";
$salt2  = "9*hz!";
$handle = 'firstprez';
$pass   = 'GW022231';

$result = VerifyUserInDB($table, $salt1, $salt2,
   $handle, $pass);
   
if ($result) echo "Login details $handle/$pass verified.";
else echo "Login details $handle/$pass could not be verified.";

$pass = 'GW022232';
echo "<br /><br />";

$result = VerifyUserInDB($table, $salt1, $salt2,
   $handle, $pass);
   
if ($result) echo "Login details $handle/$pass verified.";
else echo "Login details $handle/$pass could not be verified.";

?>
