<?php 

class Authors
{
    //les proprieter de la classe
        public $id;
        public $firstname;
        public $lastname;
 
/**
 * Authors constructor .
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)
{
    global $db;

    $id = str_secur($id);

    $reqAuthors = $db->prepare('SELECT * FROM authors  WHERE id = ?');
    $reqAuthors->execute([$id]);
    $data = $reqAuthors->fetch();

    $this->id = $id;
    $this->firstname = $data['firstname'];
    $this->lastname = $data['lastname'];

}


 /**
  * Envoie de tous les auteurs
  *
  * @return array
  */
 static function getAllAuthors(){
     global $db;
     $reqAuthors = $db->prepare('SELECT * FROM authors');
     $reqAuthors->execute([]);
     return $reqAuthors->fetchAll();
 } 



}