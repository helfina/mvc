<?php
if (isset($_POST['submit'])){
    if(isset($_POST['log']) and !empty($_POST['log'])){
        if(filter_var($_POST['log'], FILTER_VALIDATE_EMAIL)){
            if(isset($_POST['pass']) and !empty($_POST['pass'])){
                global $db;
                $reqlog = $db->prepare('SELECT `log` FROM `admins` WHERE `log`=? AND `pass` =? '); 
                $reqlog->execute(array($_POST['log'], $_POST['pass']));
                $row = $reqlog->rowCount();
                
                    if($row == TRUE){
                        $_SESSION['admin'] = $_POST['log'];
                        header('Location:indexAdmin.php?admin=admin');
                       
                    }else{
                        $error = 'votre username ou votre mot de pass est inconnue';
                    }
            }else{
                $error = 'Veuillez saisir votre mot de passe';
            }

        }else{
            $error = 'Veuillez entré un mail valide';
        }

    }else{
        $error = 'Veuillez saisir un username';
    }
}