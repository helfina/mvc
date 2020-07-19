
<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($pageAdmin) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <h1>Administration</h1>

    <ul>
            <?php foreach($allAdmins as  $allAdmins => $admin) : ?>

        <li>
            <?= $admin['id']?> : <?= $admin['firstname'] ?> <?= $admin['lastname'] ?> 

            <?php if($admin['confirmer'] == 0){ ?>

                - <a href="index.php?page=<?= $admin['id']?>">Confirmer</a> 

                <?php } ?>

                - <a href="index.php?page=<?= $admin['id']?>">Supprimer</a> 

        </li>
        <?php endforeach; ?>
    </ul>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
