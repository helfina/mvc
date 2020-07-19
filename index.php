<?php
// realpath('index.php');
//autoload.php genere avec composer
require_once __DIR__ . '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}
// Inclusion des fichiers principaux
include_once '_config/config.php';  //Demarre la session
include_once '_functions/functions.php';

// Autoloader
require_once '_classes/Autoloader.php';
Autoloader::register();

// Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} //elseif($page = "admin"){
    //tu redirige vers
//        include_once __DIR__ . '/_admin/indexAdmin.php';
    
//}
else{
    $page = 'home';
}


// Tableau contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Connexion à la base de données
    include_once '_config/db.php';

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {

    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';

}