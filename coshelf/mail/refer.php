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

   echo $businessname;
   echo $contactname;
// Create the email and send the message
$to = 'mustafashakeel@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Coshelf.com Refer Form:  $name";
$email_body = "You have received a new message from Coshelf Website Refer Maker / Retailer .\n\n"."Here are the details:\n\nBusiness Name: $businessname\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: Coshelf.com Refer Retailer / Maker\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
