<?php // Recipe 3: Friendly Text

require_once('../WDC.php');

$speech = "<h3>Winston Churchill: 'We will never surrender'</h3>I have, myself, full confidence that if all do their duty, if nothing is neglected, and if the best arrangements are made, as they are being made, we shall prove ourselves once again able to defend our Island home, to ride out the storm of war, and to outlive the menace of tyranny, if necessary for years, if necessary alone.<br />&nbsp;&nbsp;&nbsp;At any rate, that is what we are going to try to do. That is the resolve of His Majesty's Government - every man of them. That is the will of Parliament and the nation.<br />&nbsp;&nbsp;&nbsp;Even though large tracts of Europe and many old and famous States have fallen or may fall into the grip of the Gestapo and all the odious apparatus of Nazi rule, we shall not flag or fail.<br />&nbsp;&nbsp;&nbsp;We shall go on to the end, we shall fight in France, we shall fight on the seas and oceans, we shall fight with growing confidence and growing strength in the air, we shall defend our Island, whatever the cost may be, we shall fight on the beaches, we shall fight on the landing grounds, we shall fight in the fields and in the streets, we shall fight in the hills; we shall never surrender.";

echo FriendlyText($speech, TRUE);

?>
