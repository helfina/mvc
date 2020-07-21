<?php
$allcategory = Categories::getAllCategories();
$allImages = Images::getAllImages();

$mode_edition = 0;


// edition d'un article
if(isset($_GET['admin']) AND !empty($_GET['admin'])){

    global $db;
    $mode_edition = 1;
    $edit_id = str_secur($_GET['edit']);
    $edit_article = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $edit_article->execute(array($edit_id));

    //verification que larticle exsiste

    if($edit_article->rowCount() == 1 ){
        $edit_article = $edit_article->fetch();
      
    }else{
        die ('Erreur l\'article demandé n\'existe pas ...');
    }
}

// redaction d'un article
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
        
        $article_titre = str_secur($_POST['titre']);
        $article_description = str_secur($_POST['description']);
        $article_contenu = str_secur($_POST['contenu']);
        $article_categorie = str_secur($_POST['categorie']);
        $article_image = str_secur($_POST['image']);
        if($mode_edition == 0){

            global $db;
            $insert = $db->prepare('INSERT INTO `articles` (`id`,`title`,`description`,  `content`, `date`, `id_admin`, `id_category`, `id_image` )
            VALUE(?,?,?,?,NOW(),1,?)');
    
            $insert->execute(array($article_titre, $article_description, $article_contenu, $article_categorie, $article_image));
            debug($insert);
        }else{
            $update = $db->prepare('UPDATE articles SET title = ?,sentence = ?, content = ?,id_admin = 1, id_category = ?, id_image = ?, date_edit = NOW() WHERE id = ? ');
            $update->execute(array($article_titre, $article_description, $article_contenu, $article_categorie, $article_image, $edit_id));
        //  header('Location: http://127.0.0.1/Tutos_PHP/Articles/article.php?id='.$edit_id);
         $info = 'Votre article a bien été mis à jour !';

        }
        $info =  'votre article a bien été posté!';
    }else{
        $info = 'Veuillez remplir tous les champs !';
    }
}
