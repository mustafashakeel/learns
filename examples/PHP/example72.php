<?php // Recipe 72: Curl Get Contents

require_once('../WDC.php');

$agent = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; ' .
         'rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR ' .
         '3.5.30729)';
$url   = 'http://robinnixon.com/thejourney/';

echo CurlGetContents($url, $agent);

?>
