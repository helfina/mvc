<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <main class="container dashboard">

        <section class="row sidebar">

            <figure class="col-6">
                <img src="" alt="avatar">
                <figcaption>
                    <h3> bonjour : Nom Prenom</h3>
                </figcaption>
            </figure>

            <nav class="col-6 navAdmin">

               <h3>Vos collabotrateur</h3>

            <?php foreach($allAdmin as  $allAdmin => $admin) :?>

                <ul>
                    <li><?= $admin['firstname'] .' '. $admin['lastname']?></li>
                
                </ul> 
            <?php endforeach; ?>

            </nav>
            

            <button>Gerez l'accès</button>
        </section>

        <section class=" row article">
        <h1>Bienvenue dans votre espace Admin</h1>

  
     
    <ul>
      <?php 
      global $db;
      $articles = $db->prepare('SELECT * FROM articles ORDER BY date_time_publication DESC');
      while($a = $articles->fetch()) { ?>
      <li><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a> | <a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a> | <a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a></li>
      <?php } ?>
   <ul>








        <!-- <div class="post_article">

            <form method="post" action="" enctype="multipart/form-data">

                <fieldset>
                    <legend>Nouvel Article</legend>
                    <input type="text" name="titre" placeholder="titre du post/img">
                    <textarea name="content" placeholder="ecrivez votre texte"></textarea>
                    <input type="file" name="img" placeholder="charger l'image">
                </fieldset>

                <button type="submit" name="Envoyer">Publier</button>
            </form>

                <h3>Envoi d'une image</h3>
                
            <form  action="" method="post">

            <label>Liens de l'images</label>
                <input type="file" name="image" enctype=""/>
                <input type="submit" value="Envoyer Images" />
            </form>

        </div> -->

        <div class=" col-10 ancien_post">
            <h2>Ancien poste</h2>
            <table>

            <?php  foreach($allArticle as $index => $article) : ?>

                <ul>
                    <li><?= $article['title']?></li>
                    <li><?= $article['sentence']?></li>
                    <li><?= $article['content']?></li>
                    <li><?= $article['image']?></li>
                    <li>
                        <a href="index.php?page=modifier <?= $article['id']?>">Modifier
                            <i class="fas fa-pencil-alt"></i>
                        </a> </li>
                    <li>
                        <a href="index.php?page=supprimer <?= $article['id']?>"> Supprimer
                            <i class="fas fa-trash-alt"></i>
                        </a></li>
                </ul>

            <?php endforeach; ?> 

            

            </table>
        </div>
    </section>
    </main>

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>