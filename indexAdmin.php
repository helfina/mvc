<?php
// <php realpath('indexAdmin.php');>

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
if (isset($_GET['admin']) AND !empty($_GET['admin'])) {
    $admin = trim(strtolower($_GET['admin']));
} 

else{
    $admin = 'admin';
}


// Tableau contenant toutes les pages
$allAdmins = scandir('controllers/admin/');

// Vérification de l'existence de la page
if (in_array($admin.'_controller.php', $allAdmins)) {

    // Connexion à la base de données
    include_once '_config/db.php';

    // Inclusion de la page
    include_once 'models/admin/'.$admin.'_model.php';
    include_once 'controllers/admin/'.$admin.'_controller.php';
    include_once 'views/admin/'.$admin.'_view.php';

} else {
    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';

}