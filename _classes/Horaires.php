<?php 

class Horaires
{

public $id;
public $id_shop;
public $jour;
public $matinOpen;
public $matinClose;
public $AmidiOpen;
public $AmidiClose;


/**
 * Shop constructor .
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)

{
    global $db;

    $id = str_secur($id);

    $reqHoraire = $db->prepare('SELECT * FROM `horaires`  WHERE id = ?');
    $reqHoraire->execute([$id]);
    $data = $reqHoraire->fetch();

    $this->id = $id;
    $this->id_shop = $data['id_shop'];  
    $this->jour = $data['jour'];
    $this->matinOpen = $data['matinOpen'];
    $this->matinClose = $data['matinClose'];
    $this->AmidiOpen = $data['AmidiOpen'];
    $this->AmidiClose = $data['AmidiClose'];
}


 /**
  * Envoie de tous les magasin
  *
  * @return array
  */
 static function getAllHoraire(){
     global $db;
     $reqHoraire = $db->prepare('SELECT `magasins`.*, `images`.`id_shop`
     FROM `images`
        LEFT JOIN `magasins` ON `magasins`.`id_image` = `images`.`id`');
     $reqHoraire->execute([]);
     return $reqHoraire->fetchAll();
 }

static function getHoraireStJean(){
    global $db;
    $reqHoraire = $db->prepare('SELECT `magasins`.*, `horaires`.`id_shop`, `images`.`id_shop` FROM `horaires` LEFT JOIN `magasins` ON `magasins`.`id_horaire` = `horaires`.`id` LEFT JOIN `images` ON `magasins`.`id_image` = `images`.`id` WHERE `magasins`.`id` = 1 LIMIT 0, 25');
    $reqHoraire->execute([]);
     return $reqHoraire->fetch();
}

static function getHoraireGrandChamp(){
    global $db;
    $reqHoraire = $db->prepare('SELECT `magasins`.*, `horaires`.`id_shop`, `images`.`id_shop` FROM `horaires` LEFT JOIN `magasins` ON `magasins`.`id_horaire` = `horaires`.`id` LEFT JOIN `images` ON `magasins`.`id_image` = `images`.`id` WHERE `magasins`.`id` = 2 LIMIT 0, 25');
    $reqHoraire->execute([]);
     return $reqHoraire->fetch();
}


}