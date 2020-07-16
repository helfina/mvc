<?php

class Images
{
    public $id;
    public $image;
    public $id_category;
    public $id_shop;
    public $id_article;
    public $id_admin;
    function __construct($id)
    {
        global $db;
    
        $id = str_secur($id);
    
        $reqImages = $db->prepare('SELECT * FROM images  WHERE id = ?');
        $reqImages->execute([$id]);
        $data = $reqImages->fetch();
    
        $this->id = $id;
        $this->image = $data['image'];
        $this->id_category = $data['id_category'];  
        $this->id_shop = $data['id_shop']; 
        $this->id_article = $data['id_article'];
        $this->id_admin = $data['id_admin'];

    }

    static function getAllImages()
    {
        global $db;
        $reqImages = $db->prepare("SELECT * FROM `images`");
        $reqImages->execute([]);
        return $reqImages->fetchAll();
    } 
     
    function tranfertImage(){
     
    }
}

