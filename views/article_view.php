
<!DOCTYPE html>
<html lang="fr">
<html>
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <h1>Articles</h1>
  
    <?php foreach($readArticle as $readArticle => $article) : ?>
        <figure>
        <h2><?= $article['title'] ?></h2>
        <img src="<?= $article['image'] ?>" alt="">
        <figcaption>
        <strong><?= $article['sentence'] ?></strong>
        <p><?= $article['content'] ?></p>
        </figcaption>
        </figure>
    

  
    

    <?php endforeach; ?>
 

    <?php include_once 'views/includes/footer.php'?>

    
</body>
</html>
