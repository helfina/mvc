<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <h1>Redaction / Edition</h1>


    <form action="" method="POST" style="background-color: purple; display:flex; flex-direction:column" class="row">

        <input type="text" name="titre" id="" placeholder="titre" <?php if($mode_edition == 1) { ?>value="<?= $edit_article['titre']?>"<?php } ?>>

        <input type="text" name="description" id="" placeholder="description">

        <textarea name="contenu" id="" cols="30" rows="10"placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= $edit_article['contenu']?><?php } ?></textarea>

        <select>
            <option value=""></option>
            <?php foreach($allcategory as  $allcategory => $category) : ?>
            <option name="categorie" value="<?= $category['id']?>"><?= $category['nom']?></option>
            <?php endforeach; ?>
        </select>

        <select>
            <option value=""></option>
            <?php foreach($allImages as  $allImages => $image) : ?>
            <option name="categorie" value="<?= $image['id']?>"><?= $image['image']?></option>
            <?php endforeach; ?>
        </select>

        
        <input type="submit" value="Envoyer l'article">
    </form>
    <br>
    <?php if(isset($info)){echo $info;}?>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
