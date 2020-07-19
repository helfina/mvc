<?php
if(isset($_POST['article_titre'], $_POST['article_contenu'])){
    if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])){

    }else{
        $error = 'Veuillez remplir tous les champs !';
    }
}