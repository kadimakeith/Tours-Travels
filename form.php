<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = "info@madronetravel.co.ke";

$email_subject = "New Form submission";

$email_body = "You have received a new message from $name \r\n
                            Here is the message: $message \r\n
                            You can contact him/her through this number: $phone \r\n";

$to = "info@madronetravel.co.ke";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";
                          
                         
mail($to,$email_subject,$email_body,$headers);


// Function to validate against any email injection attempts

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>