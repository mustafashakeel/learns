<?php // Recipe 45: Use Short URL

require_once('../WDC.php');

$token  = "81e2c"; // Replace with a token from Plug-in 44
$file   = "shorturls.txt";
$result = UseShortURL($token, $file);

if ($result)
{
   echo "The short token '$token' redirects to: ";
   echo "<a href='$result'>$result</a><br /><br />";
   echo "To automatically redirect there do not echo ";
   echo "anything, just output the result returned by ";
   echo "this function in a header, like this:<br /><br />";
   echo '<font face="Courier New">header("Location: $result");';
}
else echo "The short token '$token' is unrecognized";

// To turn this Plug-in into a program to redirect short URLs,
// delete the above example code and replace it with the four
// lines of code below, then save this file as, for example,
// go.php.
   
// $file   = "shorturls.txt";
// $result = UseShortURL($_GET['u'], $file);
// if ($result) header("Location: $result");
// else echo "That short URL is unrecognized";

?>
