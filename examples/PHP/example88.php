<?php // Recipe 88: Input Prompt

require_once('../WDC.php');

$value = '';

if (isset($_POST['uname']))
{
   $value = $_POST['uname'];
   echo "You submitted the value '$value'<br />";
}

$self = $_SERVER['PHP_SELF'];
echo    "<br /><form method='post' action='$self'>\n";
echo    "Username: " . InputPrompt(
        "name='uname' type='text' size='50' value='$value'",
        'Required Field: Please enter your Username here');
echo    "<input type='submit'></form>\n";

?>
