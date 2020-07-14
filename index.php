<?php
// Démarre une session 
include_once '_config/config.php';
include_once '_functions/functions.php';
include_once '_classes/Autoloader.php';
include_once '_config/db.php';
//inclusion des classes general
//autoloader
Autoloader::register();

// echo sha1('password');

// $var = magasins::getAllImages();
// debug($var);
// exit;

/**
 * strtolower — Renvoi une chaîne en minuscules
 * Return string, après avoir converts tous les caractères alphabétiques en minuscules.
 * trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
 *
 */

//Définition de la page courrante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} 
else {
    $page = 'home';
}


// $_SESSION['lang'] = getUserLanguage();
// debug($_SESSION['lang']);

//Array contenant toutes les pages
$allPages = scandir('controllers/');
// var_dump($allPages);

if (in_array($page . '_controller.php', $allPages)) {

    // $lang = getPageLanguage($_SESSION['lang'], ['header',$page,'footer']);
    // debug($lang);

    //Inclusion de la page
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';

}else{
    //Retour d'une erreur
    echo 'erreur 404';
}

// //Définition de la page admin
// if (isset($_GET['admin']) AND !empty($_GET['admin'])) {
//     $admin = trim(strtolower($_GET['admin']));
// } 
// else {
//     $admin = 'admin';
    
// }
