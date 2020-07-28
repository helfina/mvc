<?php 

class Magasins
{

public $id;
public $name_shop;
public $address;
public $cp;
public $city;
public $tel;
public $id_category;
public $id_image;
public $id_admin;
/**
 * Shop constructor .
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)

{
    global $db;

    $id = str_secur($id);

    $reqShop = $db->prepare('SELECT * FROM `magasins`  WHERE id = ?');
    $reqShop->execute([$id]);
    $data = $reqShop->fetch();

    $this->id = $id;
    $this->nom = $data['nom'];
    $this->address = $data['rue'];
    $this->cp = $data['code_postal'];
    $this->city = $data['ville'];
    $this->tel = $data['tel'];
    $this->id_image = $data['id_image']; 
    $this->id_category = $data['id_category'];  
}


 /**
  * Envoie de tous les magasin
  *
  * @return array
  */
 static function getAllShop(){
     global $db;
     $reqShop = $db->prepare('SELECT `magasins`.*, `admins`.`firstname`, `images`.`image` FROM `magasins` LEFT JOIN `admins` ON `magasins`.`id_admin` = `admins`.`id` LEFT JOIN `images` ON `admins`.`id_image` = `images`.`id`');
     $reqShop->execute([]);
     return $reqShop->fetchAll();
 }

static function getShopStJean(){
    global $db;
    $reqShop = $db->prepare('SELECT `magasins`.*, `admins`.`firstname`, `images`.`image` FROM `magasins` LEFT JOIN `admins` ON `magasins`.`id_admin` = `admins`.`id` LEFT JOIN `images` ON `admins`.`id_image` = `images`.`id` WHERE `magasins`.`id` = 1 LIMIT 0, 25');
    $reqShop->execute([]);
     return $reqShop->fetch();
}

static function getShopGrandChamp(){
    global $db;
    $reqShop = $db->prepare('SELECT `magasins`.*, `admins`.`firstname`, `images`.`image` FROM `magasins` LEFT JOIN `admins` ON `magasins`.`id_admin` = `admins`.`id` LEFT JOIN `images` ON `admins`.`id_image` = `images`.`id` WHERE `magasins`.`id` = 2 LIMIT 0, 25');
    $reqShop->execute([]);
     return $reqShop->fetch();
}


}