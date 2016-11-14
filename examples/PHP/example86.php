<?php // Recipe 86: Status Message

require_once('../WDC.php');

echo "It was the ";
echo StatusMessage('best', 'status',
   'The mouse is over the word &lsquo;best&rsquo;');
echo " of times, it was the ";
echo StatusMessage('worst', 'status',
   'The mouse is over the word &lsquo;worst&rsquo;');
echo " of times,<br>it was the age of ";
echo StatusMessage('wisdom', 'status',
   'The mouse is over the word &lsquo;wisdom&rsquo;');
echo " it was the age of ";
echo StatusMessage('foolishness', 'status',
   'The mouse is over the word &lsquo;foolishness&rsquo;');

echo "<br /><br /><b>Status message</b>: <span id='status'>" .
   "Nothing to report</span>";

?>
