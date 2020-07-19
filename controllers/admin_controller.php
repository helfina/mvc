<?php

//script pour pouvoir confirmer ou non les autre administrateur

if(isset($_GET['confirmer']) AND !empty($_GET['confirmer'])){
    //on conveti en int pour etre sur que s'est un nombre entier
    $confirme = (int) $_GET['confirmer'];

    global $db;
    $req  = $db->prepare('UPDATE admins SET confirmer = 1 WHERE id');
    $req->execute(array($confirme));

}

 
$allAdmins = Admins::getAllAdmin();
