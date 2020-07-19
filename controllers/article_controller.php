<?php
if(isset($_GET['id']) AND !empty ($_GET['id'])){
    $get_id = str_secur($_GET['id']);
    global $db;
    $article = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $article->execute(array($get_id));

    //pour verifier si l'article exist bien
    if($article->rowCount() == 1 ){
        $article = $article->fetch();
        $titre = $article['title'];
        $contenu = $article['content'];
        

    }else{
        die('Cet article n\'existe pas !');
    }

}else{

    die('ERREUR');
    //header(Location : index.php) redirection
}