<?php // Recipe 2: Caps Control

require_once('../WDC.php');

$text = "THE SUN WAS SHINING ON THE SEA, SHINING WITH ALL HIS MIGHT: HE DID HIS VERY BEST TO MAKE THE BILLOWS SMOOTH AND BRIGHT - AND THIS WAS ODD, BECAUSE IT WAS THE MIDDLE OF THE NIGHT. THE MOON WAS SHINING SULKILY, BECAUSE SHE THOUGHT THE SUN HAD GOT NO BUSINESS TO BE THERE AFTER THE DAY WAS DONE";

echo CapsControl($text, "u") . "<br />";
echo CapsControl($text, "l") . "<br />";
echo CapsControl($text, "w") . "<br />";
echo CapsControl($text, "s") . "<br />";

?>
