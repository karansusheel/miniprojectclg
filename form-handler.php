<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='abc@gmail.com';

$email_subject='new form submission';

$email_body="user name: $name.\n".
            "user email: $visitor_email.\n".
            "user subject: $subject.\n".
            "user message: $visitor_email.\n";

$to='karansusheel06@gmail.com';

$headers="from: $email_from\r\n";

$headers .="reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>