<?php 

class Categories
{
public $id;
public $name;

 
/**
 * Categories constructor
 *(prepare + execute permette dempecher les injection sql + str_secur)
 * @param [int] $id
 */
function __construct($id)
{
    global $db;

    $id = str_secur($id);

    $reqCategory = $db->prepare('SELECT * FROM categories  WHERE id = ?');
    $reqCategory->execute([$id]);
    $data = $reqCategory->fetch();

    $this->id = $id;
    $this->name = $data['name'];

}

 /**
  * Envoie de tous les categories
  *
  * @return array
  */
 static function getAllCategories(){
     global $db;
     $reqCategory = $db->prepare('SELECT * FROM categories');
     $reqCategory->execute([]);
     return $reqCategory->fetchAll();
 } 



}