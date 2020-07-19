<?php

// edition d'un article
if(isset(
    $_POST['titre'], 
    $_POST['description'], 
    $_POST['contenu'], 
    $_POST['categorie'])
  ){
    if(!empty($_POST['titre']) 
        AND !empty($_POST['description'])
        AND !empty($_POST['contenu'])
        AND !empty($_POST['categorie'])
        AND !empty($_POST['image'])
      ){
        
        $titre = str_secur($_POST['titre']);
        $description = str_secur($_POST['description']);
        $contenu = str_secur($_POST['contenu']);
        $categorie = str_secur($_POST['categorie']);
        $image = str_secur($_POST['image']);

        global $db;
        $insert = $db->prepare('INSERT INTO `articles` (`id`,`title`,`description`,  `content`, `date`, `id_admin`, `id_category`, `id_image` )
        VALUE(?,?,?,?,NOW(),1,?)');

        $insert->execute(array($titre, $contenu, $categorie, $image));
        debug($insert);
        echo 'votre article a bien été posté!';
    }else{
        $error = 'Veuillez remplir tous les champs !';
    }
}
