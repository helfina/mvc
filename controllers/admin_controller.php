<?php
// if (!isset($_SESSION['id']) OR $_SESSION['id'] != 1){
//     exit();
// }

/**
 * script pour pouvoir confirmer ou supprimer les autre administrateur
 */

if(isset($_GET['type']) AND $_GET['type'] == 'admin'){

    if(isset($_GET['confirmer']) AND !empty($_GET['confirmer'])){
        //on conveti en int pour etre sur que s'est un nombre entier
        $confirme = (int) $_GET['confirmer'];

        global $db;
        $reqAdmin = $db->prepare('UPDATE admins SET confirmer = 1 WHERE id = ?');
        $reqAdmin->execute(array($confirmer));
    }

    if(isset($_GET['supprimer']) AND !empty($_GET['supprimer'])){
        //on conveti en int pour etre sur que s'est un nombre entier
        $supprimer = (int) $_GET['supprimer'];
        global $db;
        $reqAdmin = $db->prepare('DELETE FROM admins WHERE id = ?');
        $reqAdmin->execute(array($supprimer));
   }

}
 
$allAdmins = Admins::getAllAdmin();
$allArticles = Articles::getAllArticles();
