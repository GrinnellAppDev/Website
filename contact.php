<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["essay"]);
    
    if ($name == "" or $email == "" or $message == "") {
        header("Location: contact.php?status=incomplete");
        exit;
    }
    
    foreach($_POST as $value) {
        if(stripos($value, 'Content-Type:') !== FALSE) {
            header("Location: contact.php?status=spam");
            exit;
        }
    }
    
    if($_POST["address"] != "") {
        header("Location: contact.php?status=spam");
        exit;
    }
    
    require_once("inc/phpMailer/class.phpmailer.php");
    $mail = new PHPMailer();
    
    if (!$mail->ValidateAddress($email)) {
        header("Location: contact.php?status=invalidEmail");
        exit;
    }

    $email_body = "";

    $email_body = $email_body 
    . "Name: " . $name . "<br />" 
    . "Email: " . $email . "<br />" 
    . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "appdev@grinnell.edu";
    $mail->AddAddress($address, "Grinnell AppDev");
    $mail->Subject    = "Grinnell AppDev Contact Form | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        mail($address, $subject, $email_body, $headers);
        exit;
    } 

    header("Location: contact.php?status=thanks");
    exit;
}
?><?php 
$activeClass = "contact";
include('inc/header.php'); 
?>
    <div class="apply">
        <div class="color">
            <div class="contact">
                <div class="container">
                    <div class="page-header main-content">
                        <h1 class="redTitle">Interested?!</h1>

                        <h3 class="redTitle">Want an app? Want more info?</h3>

                        <div class="col-lg-3"></div>

                        <div class="col-lg-6">
                            <div class="bottom">
                                <p class="bottom">If you have a <em>request</em> for an app, an <em>idea</em> of what we should build next, want more information about us, or have any <em>feedback</em>, please use the form below. We'd love to hear from you!</p>
                            </div>

                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="applyCont">
                <div class="col-lg-3"></div>

                <div class="col-lg-6">
                    <h2>Shoot us an email!</h2>
<center>
<!-- Do not change the code! -->
<a id="foxyform_embed_link_666381" href="http://www.foxyform.com/">foxyform</a>
<script type="text/javascript">
(function(d, t){
  var g = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
  g.src = "http://www.foxyform.com/js.php?id=666381&sec_hash=26c05849dd0&width=350px";
  s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
</center>
<!-- Do not change the code! -—>

<!--
            <?php if (isset($_GET["status"]) and $_GET["status"] == "thanks") { ?>
            <p class="redForm">Thanks for your message, we'll be in touch shortly!</p>
            <?php } if (isset($_GET["status"]) and $_GET["status"] == "spam") { ?>
            <p class="redForm">Are you trying to spam us? Shame on you!</p>
            <?php } if (isset($_GET["status"]) and $_GET["status"] == "invalidEmail") { ?>
            <p class="redForm">The email you provided seems to be invalid. Please try again.</p>
            <?php } if (isset($_GET["status"]) and $_GET["status"] == "incomplete") { ?>
            <p class="redForm">Hey, you! You sent us an incomplete form. Shame on you! Please try again.</p> <?php } ?> 


                    <form class="form" action="contact.php" method="post" id="contact">
                        <fieldset>
            <label for="name">Name: *</label> <br />
            <input type="text" id="name" name="name"><br />
            <label for="email">Email: *</label> <br />
            <input type="text" id="email" name="email"><br />
            <label for="essay">Message: *</label><br />
            <textarea name="essay" rows="5" cols="80" maxlength="1000" id="essay"></textarea> <br />

                            <br>
                            <button onclick="<?php $success = true; ?>" type="submit">Submit</button>
                        </fieldset>
                    </form>
                    -->
                </div>
                        <div class="col-lg-3"></div>
            </div>
        </div>

    </div>
    
    <?php 
    include('inc/footer.php'); 
    ?>
