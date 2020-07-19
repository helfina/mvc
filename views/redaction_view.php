<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <h1>Redaction</h1>
    <form action="" method="POST" style="background-color: purple; display:flex; flex-direction:column" class="row">

        <input type="text" name="titre" id="" placeholder="titre">

        <input type="text" name="description" id="" placeholder="description">

        <textarea name="contenu" id="" cols="30" rows="10"placeholder="Contenu de l'article"></textarea>

        <select>
            <?php foreach($allcategory as  $allcategory => $category) : ?>
            <option name="categorie" value="<?= $category['id']?>"><?= $category['nom']?></option>
            <?php endforeach; ?>
        </select>

        <select>
            <?php foreach($allImages as  $allImages => $image) : ?>
            <option name="categorie" value="<?= $image['id']?>"><?= $image['image']?></option>
            <?php endforeach; ?>
        </select>

        
        <input type="submit" value="Envoyer l'article">
    </form>
    <br>
    <?php if(isset($error)){echo $error;}?>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
