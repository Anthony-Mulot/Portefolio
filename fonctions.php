<?php


// include_once('index.php');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function



use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;



include_once('phpmailer/phpmailer/src/SMTP.php');

//load Composer's autoloader
require 'autoload.php';


$em = 'lemumu43@gmail.com';
$s = 'Demande d\'information';
$p = $_POST['pays'];
$v = $_POST['ville'];
$ad = $_POST['email'];
$pr = $_POST['name'];
$n = $_POST['lastname'];
$po = $_POST['postal'];
$m = '
    <html>
    <body> 
    
        
        <div> Prenom :' . $pr . ' </div>
        <div> Nom  : ' . $n . ' </div> 
        <div>Email : ' . $ad . '  </div>
        <div> Pays : ' . $p . '  </div>
        <div> Ville : ' . $v . ' </div>
        <div> Code postal : ' . $po . ' </div>
        </br> 
        <div> Message : </br><b> ' . $_POST['message'] . ' </b> </div>

    </body>

    </html>';

//var_dump($m);


echo 'ca bug ici';

if (isset($_POST['submit'])) {



    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;  //SMTP::DEBUG_SERVER//;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'Lemumu43@gmail.com';                     // SMTP username
        $mail->Password   = 'Fimeki@3';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above




        //Recipients
        $mail->setFrom($em, 'boby');
        $mail->addAddress('lemumu43@gmail.com', 'Anthony Mulot');     // Add a recipient

        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('ne_pas_repondre@gmail.com', 'Message Automatique');
        //  $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $s;
        $mail->Body = $m;

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        $success = 'Message has been sent';
        echo  $success;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {

    echo 'Votre message nest pas envoyé ';
    sleep(7);
    header('location: index.php');
}
