<?php

$to = "zanewaite99@gmail.com";
$subject = "Test Email subject";

$email = $_POST['email'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail($to, $subject, $comment, $headers);
echo "Email sent";

?>