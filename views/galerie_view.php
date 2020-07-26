<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>

</head>

<body class="container">

    <?php include_once 'views/includes/header.php'?>

    <p class="ariane">
        <a href="index.php?page=home">Accueil > </a> Galerie
    </p>
    <h1>Galerie</h1>
    <main class="container">

        <div class="row filtre">

            <button class="col-s-3 pc-1 col-1 btn active" onclick="filterSelection('all')">Toutes les catégories</button>
            <button class="col-s-3 pc-1 col-1 btn" onclick="filterSelection('mariage')">Mariage</button>
            <button class="col-s-3 pc-1 col-1 btn" onclick="filterSelection('deces')">Décès</button>
            <button class="col-s-3 pc-1 col-1 btn" onclick="filterSelection('St_valentin')">St Valentin</button>

        </div>

        <div class="container photos">

            <article class="row mariage">

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body">
                        <h3 class="item__title">Titre 1</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 2</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 3</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet fleure rose">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>

            </article>

            <article class="row deces">

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compopot.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compopot.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compopot.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compopot.jpg" alt="bouquet fleure rouge">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                
            </article>

            <article class="row St_valentin">

                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compoflorale.jpg" alt="bouquet">
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compoflorale.jpg" alt="bouquet">
                    <figcaption class="item__body ">
                        <h3 class="img-resp item__title">Titre 5</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compoflorale.jpg" alt="bouquet">
                    <figcaption class="item__body ">
                        <h3 class="img-resp item__title">Titre 6</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
                <figure class="col-s-12 col-ps-4 col-txs-3 col-tm-3  col-tl-4 col-pc-2 col-2 item">
                    <img class="item__image" src="assets/images/compoflorale.jpg" alt="bouquet" >
                    <figcaption class="item__body ">
                        <h3 class="item__title">Titre 4</h3>
                        <p class="item__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis libero in magna venenatis eleifend.</p>
                    </figcaption>
                </figure>
               
            </article>

        </div>
        
    </main>
    
    <?php include_once 'views/includes/footer.php'?>

    <script src="<?= PATH?>assets/js/galerie.js" defer></script>
    
</body>

</html>
