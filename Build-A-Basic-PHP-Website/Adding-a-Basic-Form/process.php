<!--Processing form data-->
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

Echo "<pre>";
$email_body = '';
$email_body .= "Name: ".$name."\n";
$email_body .= "Email: ".$email."\n";
$email_body .= "Details: ".$details."\n";
echo $email_body;
echo "</pre>";
?>
    