<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>

</head>

<body class="container">

    <?php include_once 'views/includes/header.php'?>

    <div class="slider row" id="slider">
        <img class="img-resp col-12" id="slide"
            src="assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg" alt="Bouquets">
    </div>



    <main class="container">

        <section class="Boutiques">
            <h1>Bleuets Rose</h1>
            <article class="col-s-12 col-txs-6 col-6 ">

                <h2>St-Jean-brevelay</h2>

                <figure class="row">

                    <img class="img-resp col-12" src="assets/images/93615128_3473101756038814_3519088746832068608_o.jpg"
                        alt="devanture du magasins de st jean brevelay">


                    <figcaption class="row">

                        <address class="col-12 adresse">
                            2 Rue de buléon<br>
                            56660 Saint-Jean-Brevelay<br>
                            <a href="tel:+33297604165">Tel : 02.97.60.41.65</a>
                        </address>

                        <h3>Horaires</h3>

                        <table class="col-12">
                            <tbody>
                                <tr>
                                    <td class="day">Lundi</td>
                                    <td>9H30 - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Mardi</td>
                                    <td>9H30 - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Mercredi</td>
                                    <td>Fermé</td>
                                </tr>
                                <tr>
                                    <td class="day">Jeudi</td>
                                    <td>9H30 - 12H</td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Vendredi</td>
                                    <td>9H30 - 12H</td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Samedi</td>
                                    <td>9H30 - 12H30</td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Dimanche & Férié</td>
                                    <td>9H30 - 12H30</td>
                                </tr>
                            </tbody>
                        </table>



                    </figcaption>
                </figure>
            </article>

            <article class="col-s-12 col-txs-6 col-6 ">
                <h2>Grand-champ</h2>

                <figure class="row">

                    <img class="img-resp col-12" src="assets/images/94270775_109297020750630_2813684696821530624_o.jpg"
                        alt="devanture du magasin de Grand Chamd">

                    <figcaption class="row">

                        <address class="col-12 adresse">
                            1 route de vannes<br>
                            56390 Grand-Champ<br>
                            <a href="tel:+33952461614">Tel : 09.52.46.16.14</a>
                        </address>

                        <h3>Horaires</h3>
                        <table class="col-12">

                            <tbody>
                                <tr>
                                    <td class="day">Lundi</td>
                                    <td>Fermé</td>
                                </tr>
                                <tr>
                                    <td class="day">Mardi</td>
                                    <td>9H - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Mercredi</td>
                                    <td>9H - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Jeudi</td>
                                    <td>9H - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Vendredi</td>
                                    <td>9H - 12H </td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Samedi</td>
                                    <td>9H - 12H30</td>
                                    <td>15H - 19H15</td>
                                </tr>
                                <tr>
                                    <td class="day">Dimanche & Férié</td>
                                    <td>9H - 12H30</td>
                                </tr>
                            </tbody>
                        </table>

                    </figcaption>
                </figure>
            </article>
        </section>

        <section class="Galerie">

            <h2 class="title">Galerie</h2>

            <article class="carousel">

                <div class="precedent" onclick=" ChangeSlide(-1) ">
                    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="black">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </div>
                <div class="row blockOne">


                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14468205_1439402822742061_4159949213737607134_o.jpg" alt="bouquet">
                        <figcaption class="col-12 item__body">
                            <h4 class="item__title">Titre 1</h4>
                            <p class="item__description">
                                Description de l'image Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia
                                maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14468205_1439402822742061_4159949213737607134_o.jpg" alt="bouquet">
                        <figcaption class="item__body">
                            <h4 class="item__title">Titre 2</h4>
                            <p class="item__description">Description de l'image Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Nisi consectetur eos temporibus. Repudiandae incidunt aliquam ex ad
                                unde ipsam perspiciatis error, eaque sint? Minima repellat suscipit doloribus dolor
                                nostrum consequatur!</p>
                        </figcaption>

                    </figure>
                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet">
                        <figcaption class="item__body">
                            <h4 class="item__title">Titre 3</h4>
                            <p class="item__description">Description de l'image Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Error, praesentium. Totam voluptate excepturi adipisci dicta ab
                                similique, odit blanditiis, laudantium odio illum debitis exercitationem sint, sapiente
                                fugit minima autem eveniet?</p>
                        </figcaption>
                    </figure>

                </div>
                <div class="row blockTwo">
                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet">
                        <figcaption class="item__body">
                            <h4 class="item__title">Titre 4</h4>
                            <p class="item__description">Description de l'image Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Fugiat culpa delectus asperiores, nostrum dolorum officia dolorem illo
                                sed recusandae ad eligendi vitae, numquam mollitia! Nisi debitis earum amet deleniti
                                nostrum!</p>
                        </figcaption>
                    </figure>
                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg" alt="bouquet">
                        <figcaption class="item__body">
                            <h4 class="item__title">Titre 5</h4>
                            <p class="item__description">Description de l'image Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Tempora dolores beatae deleniti mollitia magni a labore odio sit
                                minima voluptatem dolorum quia, nisi dignissimos non porro esse rerum debitis. Aut.</p>
                        </figcaption>
                    </figure>
                    <figure class="col-ts-2 col-pcl-3 col-3  item">
                        <img class="img_resp item__image"
                            src="assets/images/slider/14468205_1439402822742061_4159949213737607134_o.jpg" alt="bouquet">
                        <figcaption class="item__body">
                            <h4 class="item__title">Titre 6</h4>
                            <p class="item__description">Description de l'image Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Aut cum, accusamus nesciunt quia labore pariatur ad, distinctio
                                mollitia minima et veritatis rem natus qui necessitatibus autem impedit aperiam veniam
                                ipsa?</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="suivant" onclick=" ChangeSlide (1) ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" >
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </div>

            </article>

        </section>

        <section class="Actu">
            <h2>Suivez-Nous !</h2>
            <!-- ****logo facebook**** -->
            <a href="https://www.facebook.com/Bleuets-Rose-1387935727888771/" class="facebook">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook"
                    class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                    </path>
                </svg>
            </a>

            <div class="row">
                <aside class="col-s-12 col-tl-6 col-6">
                    <div class="fb-root"></div>

                    <script crossorigin="anonymous"
                        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0&appId=233754721152286&autoLogAppEvents=1" async defer>
                    </script>

                    <div class="fb-page"
                        data-href="https://www.facebook.com/Bleuets-Rose-1387935727888771/?ref=page_internal&amp;path=%2FBleuets-Rose-1387935727888771%2F"
                        data-tabs="timeline " data-width="500" data-height="500" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote
                            cite="https://www.facebook.com/Bleuets-Rose-1387935727888771/?ref=page_internal&amp;path=%2FBleuets-Rose-1387935727888771%2F"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Bleuets-Rose-1387935727888771/?ref=page_internal&amp;path=%2FBleuets-Rose-1387935727888771%2F">Bleuets
                                Rose</a></blockquote>
                    </div>
                </aside>

                <aside class="col-s-12 col-tl-6 col-6">
                    <div class="fb-root"></div>
                    <script crossorigin="anonymous"
                        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0&appId=233754721152286&autoLogAppEvents=1" async defer>
                    </script>

                    <div class="fb-page" data-href="https://www.facebook.com/Bleuets-Rose-Grand-Champ-109237984089867"
                        data-tabs="timeline " data-width="500" data-height="500" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/Bleuets-Rose-Grand-Champ-109237984089867"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Bleuets-Rose-Grand-Champ-109237984089867">Bleuets Rose
                                Grand
                                Champ</a></blockquote>
                    </div>
                </aside>
            </div>

        </section>

    </main>

    <?php include_once 'views/includes/footer.php'?>

   
    <script src="<?= PATH?>assets/js/slider.min.js" defer></script>
    <script src="<?= PATH?>assets/js/carousel.min.js" defer></script>
</body>

</html>