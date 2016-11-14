<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Lux Jewels </title>
</head>
<link rel="stylesheet" type="text/css" href="luxjewels.css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="27" topmargin="0" marginwidth="27" marginheight="0">

<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
<!-- Reminder: Change 'YourEmail' to Your real email -->

<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['name'];
$visitormail = $_POST['email'];
$phone = $_POST['phone'];
$services= $_POST['services'];
$notes = $_POST['notes'];



if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$services= $services ;
$subject = " Name: $visitor Service Select: $services";

$phone = $phone;
$notes = stripcslashes($notes);




$message = " $todayis [EST] \n
Best Time to Call 
-----------------
 $services \n
From: $visitor ($visitormail)\n

Additional Info ( Computers IP ) : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n

 City / Province : 
------------------------------------
City / Province:  $notes \n



Phone
---------------------------
Phone : $phone\n ";

$from = "From: $visitormail\r\n";


mail("mustafa.shakeel@gmail.com", $subject, $message, $from);

?>

 </strong>
<br />






<script language="JavaScript1.2">mmLoadMenus();</script>
<div align="left" style="position:absolute; left: 27px; top: 83px;"></div>
<div id="text-collar-her123" class="white">
<p align="center">
Date: <?php echo $todayis ?>
<br />
<strong>Thank You<u> <?php echo $visitor ?>  </u>for Choosing Lux Jewels We will get back to you with in 24 hours at the given number <u> <?php echo $phone ?></u></strong></p>
</div>

<div align="left" style="left:27px; top:526px; position:absolute"><img src="images/shim_grey.gif" width="724" height="9" alt=""></div>

<div class="copyright" style="position:absolute; left:27px; top: 537px; height: 115px;">

<img src="images/shim.gif" width="1" height="10" alt=""><br>

<a href="http://www.kohinoorandco.com/"><img src="images/hd_logo.gif" width="328" height="100" alt="" border="0"></a>

</div>

<div align="right" class="grey" style="position:absolute; left: 359px; top: 537px;"><img src="images/shim.gif" width="390" height="10" alt=""><br>

<a href="contact.html" class="greynolink">Contact us today for a free consultation </a><br>
<br>
<br>
<br>
</div>



<span class="copyright" style="position:absolute;left:27px;top:750px"><br><br><br>&copy; 2007 Lux Jewels INC.&nbsp;&nbsp;&nbsp;ALL RIGHTS RESERVED</span>

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-7669029-1");

pageTracker._trackPageview();

} catch(err) {}</script>


</body>



<!-- Mirrored from www.luxjewels.net/ by HTTrack Website Copier/3.x [XR&CO'2008], Fri, 20 Feb 2009 19:05:38 GMT -->

</html>
