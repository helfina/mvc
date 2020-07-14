<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


if(!empty ($_POST)&& isset ($_POST['contactSend'])){

    if(
        isset($_POST['nom']) 
        && isset($_POST['prenom']) 
        && isset($_POST['cp']) 
        && isset($_POST['ville']) 
        && isset ($_POST['adresse'])
        && isset($_POST['tel'])
        && isset($_POST['email'])
        && isset($_POST['objet'])
        && isset($_POST['msg']))
        {

    if(
        !empty($_POST['nom']) 
        && !empty($_POST['prenom']) 
        && !empty($_POST['cp']) 
        && !empty($_POST['ville']) 
        && !empty($_POST['adresse']) 
        && !empty($_POST['tel']) 
        && !empty($_POST['email']) 
        && !empty($_POST['objet']) 
        && !empty($_POST['msg']))
        {
            $nom = str_secur($_POST['nom']);
            $prenom = str_secur($_POST['prenom']);
            $cp = str_secur($_POST['cp']);
            $ville = str_secur($_POST['ville']);
            $adresse = str_secur($_POST['adresse']);
            $tel = str_secur($_POST['tel']);
            $email = str_secur($_POST['email']);
            $objet = str_secur($_POST['objet']);
            $msg = str_secur($_POST['msg']);

            // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);


            // $message = '- message envoyer par: ' . $nom . '' .  $prenom .'<br>'. $cp .'<br>'. $ville .'<br>' .$adresse .'<br>'. $tel .'<br>'. $adresse .'<br>'. $mail . ':' . '<br>' . $objet . '<br>' . $msg;
            // debug($message);
            // exit;
            // //ENVOYER UN EMAIL
            // mail('maboitemaldemonsite@gmail.com', 'On me contact sur mon site',$message);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'georgie.o2switch.net';  // Set the SMTP server to send through
                $mail->SMTPAuth = true;  // Enable SMTP authentication
                $mail->Username = 'gake0333';  // SMTP username
                $mail->Password = '538e738a9a27f916d4443e6c127eeed2f13571d7';  // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom($email ,  '<br>' .$nom . '<br>'. $prenom);
               
                // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                $mail->addAddress('contact@gaelle-kfe.com');               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $objet;
                $mail->Body    = $msg;
                $mail->AltBody = $msg;
               
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
                debug($mail->ErrorInfo);
                exit;
            }
        }else{
            $error = "Veuillez remplir tous les champs!";
        }

        }else{

            $error = "Une erreur s'est produite, veuillez réesayez!";
        }
}
