<?php // Recipe 60: Replace SMS Talk

require_once('../WDC.php');

$text = "FYI, afaik imho this is a cool plug-in, LOL.";

echo "<b>Before</b>: <i>$text</i><br /><br><b>After</b>: <i>" .
      ReplaceSMSTalk($text);

?>
