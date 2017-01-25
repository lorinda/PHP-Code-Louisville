<!--Processing form data-->
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

echo "<pre>";
$email_body = '';
$email_body .= "Name: ".$name."\n";
$email_body .= "Email: ".$email."\n";
$email_body .= "Details: ".$details."\n";
echo $email_body;
echo "</pre>";

$pageTitle = "Thank you";
$section = null;
include("inc/header.php");
?>

<div class="section page">
    <h1>Thank You</h1>
    <p>Thanks for the email! I &rsquo;ll check out your suggestion shortly!</p>
</div><!--End div "section page"-->

<?php include("inc/footer.php");