<?php // Recipe 61: Add User To DB

require_once('../WDC.php');

$dbhost = 'localhost'; // Normally no need to change this
$dbname = 'ajax';      // Change to your database name
$dbuser = 'root';   // Change to your database user name
$dbpass = '';   // Change to your database password

$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die(mysql_error());
//mysql_select_db($dbname) or die(mysql_error());

$table  = 'Users';
$nmax   = 32;
$hmax   = 16;
$name   = "George Washington";
$handle = "firstprez";
$pass   = "GW022232";
$email  = "george@washington.com";
$salt1  = "F^&£g";
$salt2  = "9*hz!";

$result = AddUserToDB($table, $nmax, $hmax, $salt1, $salt2,
   $name, $handle, $pass, $email, $con);

if ($result == -2) echo "The handle '$handle' already exists.";
elseif ($result == 1) echo "User '$name' successfully added.";
else echo "Failed to add user '$name'.";

echo "<br /><br />";
   
$result = AddUserToDB($table, $nmax, $hmax, $salt1, $salt2,
   $name, $handle, $pass, $email);

if ($result == -2) echo "The handle '$handle' already exists.";
elseif ($result == 1) echo "User '$name' successfully added.";
else echo "Failed to add user '$name'.";

?>
