<?php // Recipe 24: Directory List

require_once('../WDC.php');

$directory = ".";
$result    = DirectoryList($directory);
echo         "<b>Listing:</b> $directory<br /><br />";

if ($result[0] == 0) echo "No Directories";
else
{
   echo "<b>Directories:</b> ";
   for ($j=0 ; $j < $result[0] ; ++$j)
      echo $result[2][$j] . ", ";
}

echo "<br /><br />";

if ($result[1] == 0) echo "No files";
else
{
   echo "<b>Files:</b> ";
   for ($j=0 ; $j < $result[1] ; ++$j)
      echo $result[3][$j] . ", ";
}

?>
