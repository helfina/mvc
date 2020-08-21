<?php 

class Admins
{
    //les propriety de la classe
        public $id;
        public $log;
        public $pass;
        public $firstname;
        public $lastname;
        public $id_image;
        public $confirmer;
 
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
    $this->id_image = $data['id_image'];
    $this->confirmer = $data['confirmer'];


}


 /**
  * Envois de tous les admin
  *
  * @return array
  */
 static function getAllAdmin(){
     global $db;
     $reqAdmin = $db->prepare('SELECT * FROM `admins` ORDER BY id DESC');
     $reqAdmin->execute([]);
     return $reqAdmin->fetchAll();
 } 
/**
 * recupere les infos de l'admin
 *
 * @return void
 */
    static function getAdmin(){
        global $db;
        $reqAdmin = $db->prepare('SELECT * FROM `admins` WHERE id = ?');
        $reqAdmin->execute([[$_SESSION['admin']]]);
        $reqAdmin = $reqAdmin->fetch();
        return $reqAdmin;
    }

 /**
 * permet de supprimer un admin de la db
 *
 * @param [type] $id
 * @return void
 **/
    static function delete($id){

        global $db;
        $id = (int)$_GET['id'];
        $reqAdmin = $db->prepare('DELETE FROM admins WHERE id = ?');
        $reqAdmin->execute([]);
        return $reqAdmin->fetch();
    }
/**
 * permet de confirmer un admin de la db
 *
 * @return void
 */
    static function confirmAdmin(){
        
        global $db;
        $reqAdmin = $db->prepare('UPDATE admins SET confirmer = 1 WHERE id = ?');
        $reqAdmin->execute([]);
        return $reqAdmin->fetch();

    }

    

}