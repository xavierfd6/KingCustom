<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "Userm Name: $name.\n".
                "Userm Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Subject: $message.\n";

$to = 'imprntapparel@gmai.com';
$headers = "From: $email_from \r\n"

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html")
?>