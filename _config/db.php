<?php
try{

    //connexion a la base de donnée / connex to database
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch (PDOException $e)
{
   /* If there is an error an exception is thrown */
   echo 'Database connection failed.';
   die();
}