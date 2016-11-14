<?php // Recipe 38: Send Email

require_once('../WDC.php');

$message = "Hello Fred, I hadn't heard from you recently and " .
           "thought I'd send you a quick note to see how you " .
           "are keeping. - Rick";
$subject = "How are you?";

echo "Sending <i>'$message'</i>: ";
if (SendEmail($message, $subject, '', 'mustafashakeel@hotmail.com',
   '', 'mustafa.shakeel@gmail.com', NULL, NULL, ''))
      echo "Mail successful";
else echo "Mail failed";

?>
