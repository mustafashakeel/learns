<?php // Recipe 11: Upload File

require_once('../WDC.php');

echo <<<_END
<form method="post"  action="$_SERVER[PHP_SELF]"
     enctype="multipart/form-data">
<input  type="hidden"  name="flag" value="1" />
<input  type="file"    name="test" />
<input  type="submit" value="Upload" /></form>
_END;

if (isset($_POST['flag']))
{
   $result = UploadFile("test",
      array("image/jpeg", "image/pjpeg"), 100000);

   if ($result[0] == 0)
   {
      file_put_contents("test.jpg", $result[2]);
      echo "File received with the type '$result[1]' and saved ";
      echo "as <a href='test.jpg'>test.jpg</a><br />";
   }
   else
   {
      if ($result[0] == -2) echo "Wrong file type<br />";
      if ($result[0] == -3) echo "Maximum length exceeded<br />";
      if ($result[0] > 0)   echo "Error code: $result<br />";
      echo "File upload failed<br />";
   }
}

?>
