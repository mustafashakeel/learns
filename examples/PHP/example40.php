<?php // Recipe 40: Pound Code

require_once('../WDC.php');

$string = <<<_END
This is a test of #comicPound Code#-<br /><br />
#2Size 2#-
#4Size 4#-
#6Size 6#-<br />
#iitalic#i-
#red#bbold red#b-#-
#uunderline#u-
#sstrikethrough#s-<br />
_END;

echo PoundCode($string);

?>
