<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'includes/head.php'?>

    <title><?= ucfirst($admin) ?></title>
</head>

<body>

    <?php include_once 'includes/header.php'?>

    <h1>Redaction / Edition</h1>


    <form action="" method="POST" style="background-color: purple; display:flex; flex-direction:column" class="row">

        <input type="text" name="titre" id="" placeholder="titre" <?php if($mode_edition == 1) { ?>value="<?= $edit_article['titre']?>"<?php } ?>>

        <input type="text" name="description" id="" placeholder="description">

        <textarea name="contenu" id="" cols="30" rows="10"placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= $edit_article['contenu']?><?php } ?></textarea>

        <select>
            <option value=""></option>
            <?php foreach($allCategory as  $allCategory => $category) : ?>
            <option name="categorie" value="<?= $category['id']?>"><?= $category['nom']?></option>
            <?php endforeach; ?>
        </select>

        <select>
            <option value=""></option>
            <?php foreach($allImages as  $allImages => $image) : ?>
            <option name="image" value="<?= $image['id']?>"><?= $image['image']?></option>
            <?php endforeach; ?>
        </select>

        
        <input type="submit" name="redaction" value="Envoyer l'article">
    </form>
    <br>
    <?php if(isset($info)){echo $info;}?>

    <h2>Articles</h2>
        <ul>
            <li><a href="indexAdmin.php?admin=redaction">rédigez un nouvel article</a></li>
            <?php 
            // !TODOS verifier les chemein liens de page peut etre faire les route dans le htacces et index.php ou redirection header location
            foreach($allArticles as  $allArticles => $articles) : ?>
                <li>
                    <a href="indexAdmin.php?admin=redaction<?= $articles['id']?>"><?= $articles['title']?></a> 
                    
                    | <a href="indexAdmin.php?modifier<?= $a['id'] ?>">Modifier</a> 
                    | <a href="indexAdmin.php?id=<?= $a['id'] ?>">Supprimer</a>
                </li>

            <?php endforeach; ?>
        </ul>

    <?php include_once 'includes/footer.php'?>

</body>
</html>
