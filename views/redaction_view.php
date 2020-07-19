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
        <input type="text" name="article_titre" id="" placeholder="titre">
        <textarea name="article_contenu" id="" cols="30" rows="10"placeholder="Contenu de l'article"></textarea>
        <input type="image" src="" alt="image de l'article">
        <input type="submit" value="Envoyer l'article">
    </form>
    <br>
    <?php if(isset($error)){echo $error;}?>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
