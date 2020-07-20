<?php 

$readArticle= Articles::getLastArticles();


// if(isset($_GET['id']) AND !empty ($_GET['id'])){

//     global $db;
//     $get_id = str_secur($_GET['id']);
//     $article = $db->prepare('SELECT * FROM articles WHERE id = ?');
//     $article->execute([$get_id]);

//     if($article->rowCount() == 1) {
//        $article = $article->fetch();
//        $title = $article['title'];
//        $content = $article['content'];
//     } else {
//        die('Cet article n\'existe pas !');
//     }
//  }
//  else {
//      debug($db);
//     die('Erreur');
//  }
 