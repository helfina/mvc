<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body class="sitemap">

    <?php include_once 'views/includes/header.php'?>
<main>
    <ul>
            <li><a href="index.php?page=home">Accueil</a></li>
            <li><a href="index.php?page=galerie"> Galerie</a></li>
            <li><a href="index.php?page=contact">Nous Contactez</a></li>
            <li><a href="index.php?page=rgpd">Mention Légal -RGPD</a></li>
           
            
        </ul>
</main>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
