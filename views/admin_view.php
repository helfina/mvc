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
            <?php 
            // !TODOS verifier les chemein liens de page peut etre faire les route dans le htacces et index.php ou redirection header location
            foreach($allArticles as  $allArticles => $articles) : ?>
                <li>
                    <a href="index.php?id=<?= $articles['id']?>"><?= $articles['title']?></a> 
                    | <a href="redaction_view.php?edit=<?= $a['id'] ?>">Modifier</a> 
                    | <a href="supprimer_view.php?id=<?= $a['id'] ?>">Supprimer</a></li>

            <?php endforeach; ?>
        </ul>

        <h2>Images</h2>
        <?php 
            // !TODOS verifier les chemein liens de page peut etre faire les route dans le htacces et index.php ou redirection header location
            foreach($allImages as  $allImages => $images) : ?>
                <li>
                    <a href="index.php?id=<?= $images['id']?>"><?= $images['image']?></a> 
                    | <a href="redaction_view.php?edit=<?= $a['id'] ?>">Modifier</a> 
                    | <a href="supprimer_view.php?id=<?= $a['id'] ?>">Supprimer</a></li>

        <?php endforeach; ?>

        <div id="content">
            <h2>upload d'image</h2>
		
		<?php if(isset($success)):?>
		
		<div class="success"><?php echo $success;?></div>
		
		<?php endif;?>
		
		<?php if(isset($erreur)):?>
		
		<div class="error"><?php echo $erreur;?></div>
		
		<?php endif;?>
		
		<form action="index.php" enctype="multipart/form-data" method="post">
			
			<label for="avatar">Charger une photo :</label>
			<input type="file" name="avatar" />
			
			<input type="submit" class="submit" value="Charger" />
			
		</form>
		
		
		<div id="gallerie">
			
            <?php
            global $db;
			$req = $db->prepare('SELECT * FROM `images` ORDER BY id DESC');
			$req->execute();
			while($data = $req->fetch(PDO::FETCH_OBJ)):?>
			
			<div class="img"><a href="/assets/images/fullsize/<?php echo $data->image;?>"><img src="images/min/<?php echo $data->image;?>" /></a></div>
			
			<?php endwhile;?>
			
		</div>
		
		
	</div>
    </main>

    <?php include_once 'views/includes/footer.php'?>

</body>

</html>