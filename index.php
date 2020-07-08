<?php
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';
include_once '_classes/Autoloader.php';
Autoloader::register();



/**
 * strtolower — Renvoie une chaîne en minuscules
 * Retourne string, après avoir converti tous les caractères alphabétiques en minuscules.
 * trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
 *
 */

//Définition de la page courrante
if (isset($_GET['page']) and !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}
//Array contenant toutes les pages
$allPages = scandir('controllers/');
// var_dump($allPages);

if (in_array($page . '_controller.php', $allPages)) {
    //Inclusion de la page
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';
} else {
    //Retour d'une erreur
    echo 'erreur 404';
}
