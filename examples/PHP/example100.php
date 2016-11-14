<?php // Recipe 100: Display Bing Map

require_once('../WDC.php');

$result = DisplayBingMap(40.68913, -74.0446, 18, 'Aerial',
   300, 214);

$text = "<b>The Statue of Liberty</b>, officially titled " .
        "Liberty Enlightening the World, is a monument that " .
        "was presented by the people of France to the United " .
        "States of America in 1886 to celebrate its " .
        "centennial. Standing on Liberty Island in New York " .
        "Harbor, it welcomes visitors, immigrants, and " .
        "returning Americans traveling by ship. The copper-" .
        "clad statue, dedicated on October 28, 1886, " .
        "commemorates the centennial of the signing of the " .
        "United States Declaration of Independence and was " .
        "given to the United States by France to represent " .
        "the friendship between the two countries " .
        "established during the American Revolution.";

echo "<table width='300' height='214' align=left><tr><td>" .
     $result . "</td></tr></table><p align='justify'>$text";

?>
