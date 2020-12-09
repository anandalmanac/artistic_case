<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$email_from="anandalmanac@gmail.com";
$email_subject="new form submission";
$email_body="username: $name.\n".
            "usermail: $email.\n".
            "message: $message.\n".
$to ="anandalmanac@gmail.com";

$headers="from:$email_from \r\n";
$headers.="reply-to:$email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

?>