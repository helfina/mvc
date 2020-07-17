<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <main class="dasboard">
        <section class="sidebar">
            <figure>
                <img src="" alt="avatar">
                <figcaption>
                    <h3> bonjour : Nom Prenom</h3>
                </figcaption>
            </figure>
            <nav class="navAdmin">
               <h3>Vos collabotrateur</h3>

               <?php 
               
               foreach($allAdmin as  $allAdmin => $admin) {?>
            <ul>
                <li><?= $admin['firstname'] .' '. $admin['lastname']?></li>
             
            </ul> 
            <?php }?> 
            </nav>
            

            <button>Gerez l'accès</button>
        </section>
        <section class="article">
        <h1>Bienvenue dans votre espace Admin</h1>

        <div class="post_article">

            <form method="post" action="" enctype="multipart/form-data">

                <fieldset>
                    <legend>Nouvel Article</legend>
                    <input type="text" name="titre" placeholder="titre du post/img">
                    <textarea name="content" placeholder="ecrivez votre texte"></textarea>
                    <input type="file" name="img" placeholder="charger l'image">
                </fieldset>
                <button type="submit" name="Envoyer">Publier</button>
            </form>

        </div>

        
        <h3>Envoi d'une image</h3>
      <form enctype="multipart/form-data" action="#" method="post">
         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
         <input type="file" name="fic" size=50 />
         <input type="submit" value="Envoyer" />
      </form>

        <div class="ancien_post">
            <h2>Ancien poste</h2>
            <table>

            <?php 
            foreach($allArticle as $index => $article) : ?>

                <tr>
                    <td><?= $article['title']?></td>
                    <td><?= $article['sentence']?></td>
                    <td><?= $article['content']?></td>
                    <td><?= $article['id_image']?></td>
                    <td><a href="index.php?page=modifier"><i class="fas fa-pencil-alt"></i></a> Modifier</td>
                    <td><a href="index.php?page=supprimer"><i class="fas fa-trash-alt"></i></a> Supprimer</td>
                </tr>

            <?php endforeach; ?> 

            

            </table>
        </div>
    </section>
    </main>

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>