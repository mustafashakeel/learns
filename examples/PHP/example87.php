<?php // Recipe 87: Slide Show

require_once('../WDC.php');

$account = 'robinfnixon';
$result  = FetchFlickrStream($account);

if (!$result[0]) echo "No images returned";
else
{
   $style = "'position:absolute; top:10px; left:10px'";
   echo "<img id='SS1' style=$style>";
   echo "<img id='SS2' style=$style>";
   echo SlideShow($result[1]);
}

?>
