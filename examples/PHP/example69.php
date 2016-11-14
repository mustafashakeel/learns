<?php // Recipe 69: Manage Cookie

require_once('../WDC.php');

$cookie = 'Test';
$value  = '3.1415927';
$expire = 300;
$path   = '/';

$result = ManageCookie('read', $cookie, NULL, NULL, NULL);

if (ManageCookie('set', $cookie, $value, $expire, $path))
   echo "Cookie '$cookie' set to value '$value'";
else echo 'Setting of cookie failed';

echo "<br />The read value of '$cookie' is '$result'";
echo '<br />(Reload to read the cookie back).';


?>
