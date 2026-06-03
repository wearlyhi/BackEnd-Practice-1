<?php

$to = "markboiko2018@gmail.com";
$subject = "Test from PHP";

$message = "Hello!\n";
$message .= "This is a test email from XAMPP.";

$headers = "From: markboiko2018@gmail.com\r\n";
$headers .= "Reply-To: markboiko2018@gmail.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$result = mail($to, $subject, $message, $headers);

if ($result) {
    echo "Mail sent successfully!";
} else {
    echo "Mail sending failed!";
}