<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>

</head>

<body class="xlcontainer">

    <?php include_once 'views/includes/header.php'?>

    <p class="ariane">
        <a href="index.html">Accueil > </a> Galerie
    </p>
    <h1>Galerie</h1>
    <main class="container">

        <section class="row filtre">

            <button class="mobile-5 l-2 col-2 btn active" onclick="filterSelection('all')">Toutes les catégories</button>
            <button class="mobile-5 l-2 col-2 btn" onclick="filterSelection('mariage')">Mariage</button>
            <button class="mobile-5 l-2 col-2 btn" onclick="filterSelection('deces')">Décès</button>
            <button class="mobile-5 l-2 col-2 btn" onclick="filterSelection('St_valentin')">St Valentin</button>

        </section>

        <section class="photos">

            <article class="row mariage">

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 1</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 2</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 3</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>

                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopotfleur.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
            </article>

            <article class="row deces">

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compopot.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

            </article>

            <article class="row St_valentin">

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="img-fluid item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="item__image" src="assets\images\compoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="img-fluid item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\imagescompoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>
                <figure class="mobile-12 tablette-3 pc-3 l-3 col-3 item">
                    <img class="img-fluid item__image" src="assets\images\compoflorale.jpg" alt="#">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend. Sed lobortis, sem id molestie molestie, sapien ipsum tincidunt velit, vitae semper lectus quam id nulla. Morbi faucibus risus id blandit molestie</p>
                    </figcaption>
                </figure>

            </article>

        </section>
        
    </main>
    
    <?php include_once 'views/includes/footer.php'?>

    <script src="<?= PATH?>assets/js/galerie.js" defer></script>
</body>

</html>