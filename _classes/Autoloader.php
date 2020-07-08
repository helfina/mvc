<?php

class Autoloader
{    
    /**
     * Ajout de l'autoloader
     *
     * @return void
     */
    static function register(){
        spl_autoload_register(function($class){
            include_once '_classes/'.$class.'.php';
        });
    }
}

