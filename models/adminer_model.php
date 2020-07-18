<?php 

class Admins
{
    //les proprieter de la classe
        public $id;
        public $log;
        public $pass;
        public $fisrtname;
        public $lastname;
        public $id_article;
        public $id_image;
 
/**
 * Authors constructor .
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)
{
    global $db;

    $id = str_secur($id);

    $reqAdmin = $db->prepare('SELECT * FROM admins  WHERE id = ?');
    $reqAdmin->execute([$id]);
    $data = $reqAdmin->fetch();

    $this->id = $id;
    $this->log = $data['log'];
    $this->pass = $data['pass'];
    $this->firstname = $data['firstname'];    
    $this->lastname = $data['lastname'];
    $this->id_article = $data['id_article'];
    $this->id_image = $data['id_image'];


}


 /**
  * Envoie de tous les admin
  *
  * @return array
  */
 static function getAllAdmin(){
     global $db;
     $reqAdmin = $db->prepare('SELECT * FROM `admins`');
     $reqAdmin->execute([]);
     return $reqAdmin->fetchAll();
 } 

static function create(){}
static function delete(){}
static function update(){}



}