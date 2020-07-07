<?php

if(!empty($_POST)&& isset ($_POST['contactSend'])){

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
            $mail = str_secur($_POST['email']);
            $objet = str_secur($_POST['objet']);
            $msg = str_secur($_POST['msg']);

            $message = '- message envoyer par: ' . $nom . '' .  $prenom .'<br>'. $cp .'<br>'. $ville .'<br>' .$adresse .'<br>'. $tel .'<br>'. $adresse .'<br>'. $mail . ':' . '<br>' . $objet . '<br>' . $msg;
            debug($message);
            exit;
            //ENVOYER UN EMAIL
            mail('maboitemaldemonsite@gmail.com', 'On me contact sur mon site',$message);

        }else{
            $error = "Veuillez remplir tous les champs!";
        }

        }else{

            $error = "Une erreur s'est produite, veuillez réesayez!";
        }
}