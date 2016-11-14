<?php // Recipe 55: View Chat

require_once('../WDC.php');

if (!ViewChat('chatroom.txt', 'fredsmith', 300))
   echo "Error. Could not open the chat data file";
else die("<script>self.location='" . $_SERVER['PHP_SELF'] .
   "'</script>");

?>
