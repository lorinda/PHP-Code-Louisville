<?php 
//POST when form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $details = trim($_POST["details"]);

    //value validation
    if($name == ""){
        echo "Please fill in the required fields: Name";
        exit;
    }
    echo "<pre>";
    $email_body = '';
    $email_body .= "Name: ".$name."\n";
    $email_body .= "Email: ".$email."\n";
    $email_body .= "Details: ".$details."\n";
    echo $email_body;
    echo "</pre>";

    //Send Email
    header("location:suggest.php?status=thanks");

}


$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php");
?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <?php 
        if (isset($_GET["status"]) && $_GET["status"] == "thanks"){
            echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
        }else{ ?>
        <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email</p>
        <form method="post" action="suggest.php">
            <table>
                <tr>
                    <th><label for="name_id">Name</label></th>
                    <td><input type="text" id="name_id" name="name" /></td>
                </tr>
                <tr>
                    <th><label for="email_id">Email</label></th>
                    <td><input type="text" id="email_id" name="email" /></td>
                </tr>
                <tr>
                    <th><label for="details_id">Suggest Item Details</label></th>
                    <td><textarea name="details" id="details_id"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Send" />
            
        </form>
        <?php }?><!--End else block-->
    </div>
</div>
<?php include("inc/footer.php"); ?>