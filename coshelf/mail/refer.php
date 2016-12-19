<?php
// Check for empty fields
if(empty($_POST['businessname'])   ||
   !filter_var($_POST['referemail'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$businessname = strip_tags(htmlspecialchars($_POST['businessname']));
$contactname = strip_tags(htmlspecialchars($_POST['contactname']));
$referphone = strip_tags(htmlspecialchars($_POST['referphone']));
$referemail = strip_tags(htmlspecialchars($_POST['referemail']));

$refermaker = strip_tags(htmlspecialchars($_POST['refermaker']));
$referretailer = strip_tags(htmlspecialchars($_POST['referretailer']));
$referaddress = strip_tags(htmlspecialchars($_POST['referaddress']));
$referwebsite = strip_tags(htmlspecialchars($_POST['referwebsite']));
$yourname = strip_tags(htmlspecialchars($_POST['yourname']));
$youremail = strip_tags(htmlspecialchars($_POST['youremail']));


// Create the email and send the message
$to = 'hello@coshelf.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Coshelf.com Refer Form:  $businessname";
$email_body = "A New Referal  from Coshelf Website Refer Maker / Retailer .\n\n"."Here are the details:\n\nBusiness Name: $businessname\n\n
		Contact Name: $contactname\n\n Phone: $referphone\n\Refer Email :\n
		$referemail\n\n Maker : $refermaker	\n Retailer $referretailer	\n Website : $referwebsite	\n\n Address : $referaddress	\n\n Refered By name $yourname	refered by Email $youremail	 ";
$headers = "From: Coshelf.com  \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.


$headers = "From: $referemail\n";
$headers .= "Reply-To: hello@coshelf.com\r\n";
$headers .= "Return-Path: coshelf.com\r\n";
$headers .= "CC: sombodyelse@example.com\r\n";
$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";
// $headers .= "BCC: hidden@example.com\r\n";
// $headers .= "Reply-To: $referemail";   

if(mail($to,$email_subject,$email_body,$headers,"f$referemail")){
echo "Email has been send";
}else {
	echo " Email has failed";
}

return true;         
?>
<!-- 
$headers ="From:<$from>\n";
$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";

mail($to,$subject,$body,$headers,"-f$from");
 -->

<!-- 
$headers = "From: myplace@example.com\r\n";
$headers .= "Reply-To: myplace2@example.com\r\n";
$headers .= "Return-Path: myplace@example.com\r\n";
$headers .= "CC: sombodyelse@example.com\r\n";
$headers .= "BCC: hidden@example.com\r\n";

if ( mail($to,$subject,$message,$headers) ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }
 -->