<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * function qui permet de recupere la langue
 */

function getUserLanguage()
{
    if(isset($_GET['lang'])&& !empty($_GET['lang']))
    {

        $lang = str_secur(strtolower($_GET['lang']));
        $availableLanguages =  ['en', 'fr'];
        (in_array($lang, $availableLanguages)) ? $lang :  DEFAULT_LANGUAGE;
    }
    else
    {
        
        return (isset($_SESSION['lang']) && !empty($_SESSION['lang'])) ?$_SESSION['lang'] :  DEFAULT_LANGUAGE;
     }
    
}


function getPageLanguage($lang, $pages){

    $dataPage = [];

    foreach($pages as $p){

        $jsonString = file_get_contents('_lang'. $lang . '/' . $p . '.json');

        $json = json_decode($jsonString);

        $dataPage[$p] = $json;
    }
    return (object) $dataPage;
    
}

/**
     * permet de verifier si lutilisateur est connecter ou non
     *
     * @return boolean
     */
    function is_connected(): bool {
        
        return !empty($_SESSION['connecte']);
    }
    
