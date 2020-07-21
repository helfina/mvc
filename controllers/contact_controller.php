<?php 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ SMTP ;
use PHPMailer \ PHPMailer \ Exception ;

// Load Composer's autoloader
require 'vendor/autoload.php';

if(!empty ($_POST)&& isset ($_POST['contactSend'])){
    
    if(
        isset($_POST['nom'])  && isset($_POST['prenom'])  && isset($_POST['cp'])  && isset($_POST['ville']) && isset ($_POST['adresse']) && isset($_POST['tel'])  && isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['msg']))
        {

    if(!empty($_POST['nom'])  && !empty($_POST['prenom'])  && !empty($_POST['cp']) && !empty($_POST['ville'])  && !empty($_POST['adresse']) && !empty($_POST['tel'])  && !empty($_POST['email']) && !empty($_POST['objet'])  && !empty($_POST['msg']))
        {
            try{
            $nom = str_secur($_POST['nom']);
            $prenom = str_secur($_POST['prenom']);
            $cp = str_secur($_POST['cp']);
            $ville = str_secur($_POST['ville']);
            $adresse = str_secur($_POST['adresse']);
            $tel = str_secur($_POST['tel']);
            $email = str_secur($_POST['email']);
            $objet = str_secur($_POST['objet']);
            $msg = str_secur($_POST['msg']);

         
            $message = '- message envoyer par: ' . '<br>'. $nom . '<br>' .  $prenom .'<br>'. $cp .'<br>'. $ville .'<br>' .$adresse .'<br>'. $tel .'<br>'. $adresse .'<br>'. $email . ':' . '<br>' . $objet . '<br>' . $msg;
          

            //ENVOYER UN EMAIL
            // mail('gkerforne@gmail.com', 'On me contact sur mon site',$message);   
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            Contact::SmtpConex($mail);    
            //Recipients
            $mail->setFrom($email, $nom . ' ' . $prenom);

            $mail->addAddress(CONTACT_ADD, 'Bleuets Rose');     // Add a recipient
                
            $mail->Subject = $objet;
            $mail->Body = $message;
            $mail->send();
            $envoi = 'Merci de nous avoir contacter';
            // echo 'Message has been sent';

            }catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
           
    
        }else{
            $error = "Veuillez remplir tous les champs!";
        }

        }else{

            $error = "Une erreur s'est produite, veuillez réesayez!";
        }
       
}
    
