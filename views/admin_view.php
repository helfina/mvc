<!DOCTYPE html>
<html lang="fr">
<html>

<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($pageAdmin) ?></title>
</head>

<body class="container">

    <?php include_once 'views/includes/header.php'?>
    <header class="row">
        <nav>

        </nav>
    </header>
    <h1>Administration</h1>
    <main>
        <h2>Gestions des Admins</h2>
        <ul class="col-6 ">
            <?php foreach($allAdmins as  $allAdmins => $admin) : ?>

            <li>
                <?= $admin['id']?> : <?= $admin['firstname'] ?> <?= $admin['lastname'] ?>

                <?php if($admin['confirmer'] == 0){ ?>

                - <button type="submit" name="confirmer"><a
                        href="index.php?type=admin&confirmer=<?= $admin['id']?>">Confirmer</a></button>

                <?php } ?>

                - <button type="submit" name="confirmer"><a
                        href="index.php?type=admin&Supprimer<?= $admin['id']?>">Supprimer</a></button>

            </li>
            <?php endforeach; ?>
        </ul>

        <h2>Articles</h2>
        <ul>
            <?php foreach($allArticles as  $allArticles => $articles) : ?>
                <li><a href="index.php?page=article?id=<?= $articles['id']?>"><?= $articles['title']?></a></li>
            <?php endforeach; ?>
        </ul>
    </main>

    <?php include_once 'views/includes/footer.php'?>

</body>

</html>