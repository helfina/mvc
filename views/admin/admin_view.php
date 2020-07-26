<!DOCTYPE html>
<html lang="fr">
<html>

<head>

    <?php include_once 'includes/head.php';?>

    <title><?= ucfirst($admin) ?></title>
</head>

<body class="container">

    <?php include_once 'includes/header.php';?>
    <h1>Administration</h1>
    <main class="row">

    <div class="col-s-12 col-pc-5 content">
        <h2>Gestions des Admins</h2>
        <ul class="row">
            <?php foreach($allAdmins as $admin) : ?>

            <li class="col-6">
                <?= $admin['id'] . ' : ' . $admin['firstname'] ?> <?= $admin['lastname'] ?>

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



        <section class="col-s-12 col-pc-5 content">
            <h2>Upload d'Images</h2>

            <?php if(isset($success)):?>

            <div class="success"><?php echo $success;?></div>

            <?php endif;?>

            <?php if(isset($erreur)):?>

            <div class="error"><?php echo $erreur;?></div>

            <?php endif;?>

            <form class="row" action="indexAdmin.php?admin=admin" enctype="multipart/form-data" method="post">

                <label class="col-12" for="avatar">Charger une photo :</label>

                <input class="col-12 fil" type="file" name="avatar" />

                

                <select class="col-12" name="categorie" id="">
                   
                    <?php foreach($allCategories as $allCategories =>$category) : ?>
                    <option value="idCategory"><?= $category['id']. ' : ' . $category['nom']?></option>
                    <?php endforeach;?>

                </select>
                
                <select class="col-12" name="shop" id="">
                        <?php foreach($allShop as $allShop =>$shop) : ?>
                    <option value="idShop"><?= $shop['id'] . ' : ' . $shop['nom']?></option>
                    <?php endforeach;?>

                </select>

                <select class="col-12" name="admin" id="">

                    <?php foreach($allAdmins as $allAdmins =>$admin) : ?>
                        
                        <option value="idAdmin"><?= $admin['id'] .' : ' . $admin['firstname']?></option>

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

                <aside class="img">
                <p><?php echo $data->id;?>
                    <a  href="./assets/images/fullsize/<?php echo $data->image;?>">
                        <img class="img-resp" src="./assets/images/min/<?php echo $data->image;?>" />
                    </a>
                </p>
                </aside>

                <?php endwhile;?>

            </div>


            </section>
        
      
    </main>

    <?php include_once 'includes/footer.php'; ?>
</body>

</html>