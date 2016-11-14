<?php // Plug-in 46: Simple Web Proxy

require_once('../WDC.php');

$url = $_GET['u'];

// Change webproxy.php below to the name of your PHP proxy

$result = SimpleWebProxy(urldecode($_GET['u']),
   "PHP/webproxy.php");

switch(strtolower(substr($url, -4)))
{
   case ".jpg": header("Content-type: image/jpeg");   die($result);
   case ".gif": header("Content-type: image/gif");    die($result);
   case ".png": header("Content-type: image/png");    die($result);
   case ".ico": header("Content-type: image/x-icon"); die($result);
   case ".css": header("Content-type: text/css");     die($result);
   case ".xml": header("Content-type: text/xml");     die($result);
   case ".htm": case "html": case ".php":
      header("Content-type: text/html");              die($result);
   default:
      if (strtolower(substr($url, -3)) == ".js")
         header("Content-type: application/x-javascript");
      die($result);
}

?>
