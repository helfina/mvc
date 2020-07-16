<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include_once '/views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once __DIR__ . '/views/includes/header.php'?>

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

               <?php foreach($allAuthors as  $allAuthor) {?>
            <ul>
                <li><?= $allAuthor['firstname']?></li>
                <li>admin</li>
                <li>employé</li>
            </ul> 
            <?php }?> 
            </nav>
            

            <button>Gerez l'accès</button>
        </section>
        <section class="article">
        <h1>Bienvenue dans votre espace Admin</h1>

        <div class="post_article">
            <form method="post" action="admin.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Nouvel Article</legend>
                    <input type="text" name="titre" placeholder="titre du post/img">
                    <textarea name="content" placeholder="ecrivez votre texte"></textarea>
                    <input type="file" name="img" placeholder="charger l'image">
                </fieldset>
                <button type="submit" name="Envoie">Publier</button>
            </form>
        </div>

        <div class="ancien_post">
            <h2>Ancien poste</h2>
            <table>

            <?php 
            foreach($allArticle as $index => $allArticle) : ?>

                <tr>
                    <td><?= $allArticle['title']?></td>
                    <td><?= $allArticle['sentence']?></td>
                    <td><?= $allArticle['content']?></td>
                    <td><?= $allArticle['image']?></td>
                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a> Modifier</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a> Supprimer</td>
                </tr>

            <?php endforeach; ?> 

                <tr>
                    <td>un titre</td>
                    <td>content</td>
                    <td>image</td>
                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a> Modifier</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a> Supprimer</td>
                </tr>
                <tr>
                    <td>un titre</td>
                    <td>content</td>
                    <td>image</td>
                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a> Modifier</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a> Supprimer</td>
                </tr>

            </table>
        </div>
    </section>
    </main>

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>