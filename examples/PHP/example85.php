<?php // Recipe 85: Toggle Text

require_once('../WDC.php');

$text1 = " Photosynthesis is a process that converts carbon ".
         "dioxide into organic compounds, especially sugars, " .
         "using the energy from sunlight.";
$link1 = "Choose long definition";
$text2 = "$text1 Photosynthesis occurs in plants, algae, and " .
         "many species of Bacteria, but not in Archaea. Photo" .
         "synthetic organisms are called photoautotrophs, " .
         "since it allows them to create their own food. In " .
         "plants, algae and cyanobacteria photosynthesis uses " .
         "carbon dioxide and water, releasing oxygen as a " .
         "waste product. Photosynthesis is vital for life on " .
         "Earth. As well as maintaining the normal level of " .
         "oxygen in the atmosphere, nearly all life either " .
         "depends on it directly as a source of energy, or " .
         "indirectly as the ultimate source of the energy in " .
         "their food.";
$link2 = "Choose short definition";

echo "<h2>Robin's gardening website</h2>";
echo "<h3>The sun and photosynthesis</h3>";

echo ToggleText($text1, $link1, $text2, $link2);

echo "<h3>Pollination</h3>";
echo "...etc...";

?>
