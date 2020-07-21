<!DOCTYPE html>
<html lang="fr">
<html>

<head>

    <?php include_once 'includes/head.php';?>

    <title><?= ucfirst($admin) ?></title>
</head>

<body class="container">

    <?php include_once 'includes/header.php';?>
    <header class="row">
        <nav>

        </nav>
    </header>
    <h1>Administration</h1>
    <main>

    <div class="content">
        <h2>Gestions des Admins</h2>
        <ul>
            <?php foreach($allAdmins as $admin) : ?>

            <li>
                <?= $admin['id']?> : <?= $admin['firstname'] ?> <?= $admin['lastname'] ?>

                <?php if($admin['confirmer'] == 0){ ?>

                - <button type="submit" name="confirmer"><a
                        href="indexAdmin.php?confirmer=<?= $admin['id']?>">Confirmer</a></button>

                <?php } ?>

                - <button type="submit" name="confirmer"><a
                        href="indexAdmin.php?supprimer=<?= $admin['id']?>">Supprimer</a></button>

            </li>
            <?php endforeach; ?>
        </ul>
    </div>



        <div class="content">
            <h2>Upload d'Images</h2>

            <?php if(isset($success)):?>

            <div class="success"><?php echo $success;?></div>

            <?php endif;?>

            <?php if(isset($erreur)):?>

            <div class="error"><?php echo $erreur;?></div>

            <?php endif;?>

            <form action=" " enctype="multipart/form-data" method="post">

                <label for="avatar">Charger une photo :</label>

                <input type="file" name="avatar" />

                

                <select name="categorie" id="">
                   
                    <?php foreach($allCategories as $allCategories =>$category) : ?>
                    <option value="idCategory"><?= $category['id']?><?= $category['nom']?></option>
                    <?php endforeach;?>

                </select>
                
                <select name="shop" id="">
                        <?php foreach($allShop as $allShop =>$shop) : ?>
                    <option value="idShop"><?= $shop['id']?><?= $shop['nom']?></option>
                    <?php endforeach;?>

                </select>

                <select name="admin" id="">

                    <?php foreach($allAdmins as $allAdmins =>$admin) : ?>
                        
                        <option value="idAdmin"><?= $admin['id']?><?= $admin['firstname']?></option>

                        <?php endforeach;?>
                </select>

                <input type="submit" class="submit" value="Charger" />

            </form>


            <div id="gallerie">

                <?php
            global $db;
			$req = $db->prepare('SELECT * FROM `images` ORDER BY `id` DESC');
            $req->execute();
            //PDO::FETCH_OBJ -recupere les données sous forme d'objet
			while($data = $req->fetch(PDO::FETCH_OBJ)):?>

                <div class="img">
                    <a href="./assets/images/fullsize/<?php echo $data->image;?>">
                        <img src="./assets/images/min/<?php echo $data->image;?>" />
                    </a>
                </div>

                <?php endwhile;?>

            </div>


        </div>
        
      
    </main>

    <?php include_once 'includes/footer.php'; ?>
    <script src="<?= PATH?>assets/js/header.js" defer></script>
</body>

</html>