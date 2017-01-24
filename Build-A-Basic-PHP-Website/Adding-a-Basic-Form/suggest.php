<?php 
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php");
?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email</p>
        <form method="post" action="process.php">
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
    </div>
</div>
<?php include("inc/footer.php"); ?>