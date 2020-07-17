<?= realpath('indexAdmin.php'); ?>
<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_functions/functions.php';

// Autoloader
require_once '_classes/Autoloader.php';
Autoloader::register();

// Définition de la page courante
if (isset($_GET['admin']) AND !empty($_GET['admin'])) {
    $admin = trim(strtolower($_GET['admin']));
} else {
    $admin = 'admin';
}


// Tableau contenant toutes les pages
$allAdmin = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($admin.'app/_controller.php', $allAdmin)) {

    // Connexion à la base de données
    include_once '_config/db.php';

    // Inclusion de la page
    include_once 'app/models/'. $admin .'_model.php';
    include_once 'app/controllers/'. $admin .'_controller.php';
    include_once 'app/views/'. $admin .'_view.php';

} else {

    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';

}