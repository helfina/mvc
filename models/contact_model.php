<?php
/**
 * This uses the SMTP class alone to check that a connection can be made to an SMTP server,
 * authenticate, then disconnect
 */

//Import the PHPMailer SMTP class into the global namespace
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

class Contact extends PHPMailer{





    static function smtpCheck(){

        //Create a new SMTP instance
        $smtp = new SMTP;

        //Enable connection-level debug output
        $smtp->do_debug = SMTP::DEBUG_CONNECTION;

        try {
            //Connect to an SMTP server
            if (!$smtp->connect(SMTP_HOST, SMTP_PORT)) {
                throw new Exception('Connect failed');
            }
            //Say hello
            if (!$smtp->hello(gethostname())) {
                throw new Exception('EHLO failed: ' . $smtp->getError()['error']);
            }
            //Get the list of ESMTP services the server offers
            $e = $smtp->getServerExtList();
            //If server can do TLS encryption, use it
            if (is_array($e) && array_key_exists('STARTTLS', $e)) {
                $tlsok = $smtp->startTLS();
                if (!$tlsok) {
                    throw new Exception('Failed to start encryption: ' . $smtp->getError()['error']);
                }
                //Repeat EHLO after STARTTLS
                if (!$smtp->hello(gethostname())) {
                    throw new Exception('EHLO (2) failed: ' . $smtp->getError()['error']);
                }
                //Get new capabilities list, which will usually now include AUTH if it didn't before
                $e = $smtp->getServerExtList();
            }
            //If server supports authentication, do it (even if no encryption)
            if (is_array($e) && array_key_exists('AUTH', $e)) {
                if ($smtp->authenticate(SMTP_USER, SMTP_PASS)) {
                    echo 'Connected ok!';
                } else {
                    throw new Exception('Authentication failed: ' . $smtp->getError()['error']);
                }
            }
        } catch (Exception $e) {
            echo 'SMTP error: ' . $e->getMessage(), "\n";
        }
        //Whatever happened, close the connection.
        $smtp->quit();
   }

  static function SmtpConex($mail)
  {
       //Server settings
    //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output
       $mail->isSMTP();  // Send using SMTP
       $mail->Host       = SMTP_HOST;     // Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
       $mail->Username   = SMTP_USER;   // SMTP username
       $mail->Password   = SMTP_PASS; // SMTP password
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
       $mail->Port  = SMTP_PORT;  // TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS` above

   }

   
}
