<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

// //!\\ A enlever lors du déploiement
// error_reporting(E_ERROR | E_PARSE | E_ALL);
// ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Bleuets Rose");
define("WEBSITE_NAME", "Bleuets Rose");
define("WEBSITE_URL", "https://BleuetsRose.com");
define("WEBSITE_DESCRIPTION", "Léna Cadet spécialiste fleuriste de st jean brevelay et grand champ livraison possible");
define("WEBSITE_KEYWORDS", "Fleuriste-fleur-bouquets-mariage-naissances-deuil-deces-fete des mere - st valentin");
define("WEBSITE_LANGUAGE", "fr");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "bleuetsrose");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD","");

//Language
define("DEFAULT_LANGUAGE", "fr");
