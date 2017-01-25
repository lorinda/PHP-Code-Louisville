<?php 
//POST when form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));

    //value validation
    if($name == "" || $email == "" || $details == ""){
        echo "Please fill in the required fields: Name, Email, and Details";
        exit;
    }
    if($_POST["address"] != ""){
        echo "Bad form input";
        exit;
    }
    
    require("inc/phpmailer/class.phpmailer.php");
    
    //Create a phpmailer object
    $mail = new PHPMailer;
    //valid email address? if not true
    if(!$mail->ValidateAddress($email)){
        echo "Invalid Email Address";
        exit;
    }
    
    $email_body = '';
    $email_body .= "Name: ".$name."\n";
    $email_body .= "Email: ".$email."\n";
    $email_body .= "Details: ".$details."\n";
    
    
    //Send Email
    $mail->setFrom($email, $name);
    $mail->addAddress('treehouse@localhost', 'Lorinda');     // Add a recipient
    
    $mail->isHTML(false);                                  // Set email format to HTML

    $mail->Subject = 'Personal Media Library Suggestion from '.$name;
    $mail->Body    = $email_body;
    
    //calls send method
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    } 
    
    //Redirect
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
                    <th><label for="category_id">Category</label></th>
                    <td><select id="category_id" name="category" >
                            <option value="">Select One</option>
                            <option value="Books">Book</option>
                            <option value="Movies">Movie</option>
                            <option value="Music">Music</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="title_id">Title</label></th>
                    <td><input type="text" id="title_id" name="title" /></td>
                </tr>
                <tr>
                    <th><label for="format_id">Format</label></th>
                    <td><select id="format_id" name="format" >
                            <option value="">Select One</option>
                            <optgroup label="Books">
                                <option value="Audio">Audio</option>
                                <option value="Ebook">Ebook</option>
                                <option value="Hardback">Hardback</option>
                                <option value="Paperback">Paperback</option>
                            </optgroup>
                            <optgroup label="Movies">
                                <option value="Blu-ray">Blue-ray</opiton>
                                <option value="DVD">DVD</opiton>
                                <option value="Streaming">Streaming</opiton>
                                <option value="VHS">VHS</opiton>
                            </optgroup>
                            <optgroup label="Music">
                                <option value="Cassette">Cassette</option>
                                <option value="CD">CD</option>
                                <option value="MP3">MP3</option>
                                <option value="Vinyl">Vinyl</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="genre">Genre</label>
                    </th>
                    <td>
                        <select name="genre" id="genre">
                            <option value="">Select One</option>
                            <optgroup label="Books">
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Historical">Historical</option>
                                <option value="Historical Fiction">Historical Fiction</option>
                                <option value="Horror">Horror</option>
                                <option value="Magical Realism">Magical Realism</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Paranoid">Paranoid</option>
                                <option value="Philosophical">Philosophical</option>
                                <option value="Political">Political</option>
                                <option value="Romance">Romance</option>
                                <option value="Saga">Saga</option>
                                <option value="Satire">Satire</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Tech">Tech</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Urban">Urban</option>
                            </optgroup>
                            <optgroup label="Movies">
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Animation">Animation</option>
                                <option value="Biography">Biography</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Crime">Crime</option>
                                <option value="Documentary">Documentary</option>
                                <option value="Drama">Drama</option>
                                <option value="Family">Family</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Film-Noir">Film-Noir</option>
                                <option value="History">History</option>
                                <option value="Horror">Horror</option>
                                <option value="Musical">Musical</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Romance">Romance</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Sport">Sport</option>
                                <option value="Thriller">Thriller</option>
                                <option value="War">War</option>
                                <option value="Western">Western</option>
                            </optgroup>
                            <optgroup label="Music">
                                <option value="Alternative">Alternative</option>
                                <option value="Blues">Blues</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Dance">Dance</option>
                                <option value="Easy Listening">Easy Listening</option>
                                <option value="Electronic">Electronic</option>
                                <option value="Folk">Folk</option>
                                <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                                <option value="Inspirational/Gospel">Insirational/Gospel</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Latin">Latin</option>
                                <option value="New Age">New Age</option>
                                <option value="Opera">Opera</option>
                                <option value="Pop">Pop</option>
                                <option value="R&B/Soul">R&amp;B/Soul</option>
                                <option value="Reggae">Reggae</option>
                                <option value="Rock">Rock</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="year_id">Year</label></th>
                    <td><input type="text" id="year_id" name="year" /></td>
                </tr>
    
                <tr>
                    <th><label for="details_id">Suggest Item Details</label></th>
                    <td><textarea name="details" id="details_id"></textarea></td>
                </tr>
                <tr style="display:none">
                    <th><label for="address_id">Address</label></th>
                    <td><input type="text" id="address_id" name="address" />
                        Please leave this field blank! Hit Submit below.</td>
                </tr>
            </table>
            <input type="submit" value="Send" />
            
        </form>
        <?php }?><!--End else block-->
    </div>
</div>
<?php include("inc/footer.php"); ?>