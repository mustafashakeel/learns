<?php // Recipes 64a & 64b: Sanitize String & MySQL Sanitize String

require_once('../WDC.php');

$string = "& This is an 'example' string to be <b>sanitized</b>";

echo "SanitizeString()<xmp>";
echo "Before: " . $string . "\n";
echo "After:  " . SanitizeString($string);
echo "</xmp>";

$dbhost = 'localhost'; // Normally no need to change this
$dbname = 'mydb';      // Change to your database name
$dbuser = 'testing';   // Change to your database user name
$dbpass = 'testing';   // Change to your database password

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());

echo "MySQLSanitizeString()<xmp>";
echo "Before: " . $string . "\n";
echo "After:  " . MySQLSanitizeString($string);
echo "</xmp>";

?>
