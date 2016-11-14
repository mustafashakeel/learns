<?php // Recipe 74: Fetch Flickr Stream

require_once('../WDC.php');

$account = 'robinfnixon';
$result  = FetchFlickrStream($account);
$count   = 1;

echo "<b>Flickr account:</b> <i>$account</i> ";

if (!$result[0]) echo 'No photos found.';
else foreach($result[1] as $photo)
   echo "<a href='$photo'>Photo " . $count++ . '</a> ';

?>
