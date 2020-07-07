<?php 

class Shop
{

public $id;
public $name_shop;
public $address;
public $cp;
public $city;
public $id_category;
public $id_image;
public $id_horaire;
/**
 * Shop constructor .
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)

{
    global $db;

    $id = str_secur($id);

    $reqShop = $db->prepare('SELECT * FROM shop  WHERE id = ?');
    $reqShop->execute([$id]);
    $data = $reqShop->fetch();

    $this->id = $id;
    $this->name_shop = $data['name_shop'];
    $this->address = $data['address'];
    $this->cp = $data['cp'];
    $this->city = $data['city'];
    $this->id_category = $data['id_category'];  
    $this->id_image = $data['image']; 
    $this->id_horaire = $data['id_horaire']; 
}


 /**
  * Envoie de tous les magasin
  *
  * @return array
  */
 static function getAllShop(){
     global $db;
     $reqShop = $db->prepare('SELECT `shop`.*, `galerie`.`image` FROM `shop` LEFT JOIN `galerie` ON `galerie`.`id_shop` = `shop`.`id`');
     $reqShop->execute([]);
     return $reqShop->fetchAll();
 }





}