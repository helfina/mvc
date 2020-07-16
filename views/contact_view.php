<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?> - Bleuets Rose</title>
</head>

<body>
    
<?php include_once 'views/includes/header.php'?>
    <p class="ariane">
        <a href="index.html">Accueil > </a><a href="galerie.html">Galerie > </a> Contact
    </p>

    <main class="container pageContact">
        <h1>Bleuets Rose</h1>
        <section class="row contact">
        
        <?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
            <form class="mobile-12 tablette-12 pc-6 col-6" action="" method="post">
                <fieldset class="row formulaire">
                    <legend class="mobil-12 tablette-12 col-12">
                        Contactez Nous !
                    </legend>
                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="nom">Nom</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="nom" id="nom" required>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="prenom">Prénom</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="prenom" id="prenom"
                        required>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="cp">Code Postal</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="cp" id="cp">

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="ville">Ville</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="ville" id="ville" required>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for=" adresse">Adresse</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="adresse" id="adresse">

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="tel">Téléphone</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="tel" name="tel" id="tel" required>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="email">E-mail</label>
                    <input class="mobile-12 tablette-12 pc-12 l-12 col-12" type="text" name="email" id="email" required>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="objet">Objet</label>
                    <textarea class="mobile-12 tablette-12 pc-12 l-12 col-12" name="objet" id="objet"></textarea>

                    <label class="mobile-12 tablette-12 pc-12 l-12 col-12" for="msg">Message</label>
                    <textarea class="mobile-12 tablette-12 pc-12 l-12 col-12" name="msg" id="msg"></textarea>

                    <span class="mobile-12 tablette-12 pc-12 l-12 col-12" id="feedback"></span>

                    <div class=" row btn ">
                        <button class="mobile-4 tablette-3 pc-3 col-2" name='contactSend' id="click" type="submit">Envoie</button>
                        <button class="mobile-4 tablette-3 pc-3 col-2" name='contactAnnule' type="reset" id="reset">Annuler</button>
                    </div>

                </fieldset>

            </form>

            <article class="mobile-12 tablette-12 pc-6 l-6 col-6 infoMag">

                <div class="row" id="st_jean">

                    <address class="mobile-12 tablette-12 pc-12 l-12 col-3">
                        2 Rue de buléon<br>
                        56660 Saint-Jean-Brevelay<br>
                        <a href="0297604165">Tel : 02.97.60.41.65</a>
                    </address>

                    <table class="mobile-12 tablette-12 pc-12 l-12 col-8 horaireMag">
                        <tbody>
                            <tr>
                                <td class="day">Lundi Mardi Jeudi Vendredi Samedi</td>
                                <td>9H30 - 12H</td>
                                <td>15H - 19H15</td>
                            </tr>
                            <tr>
                                <td class="day">Mercredi</td>
                                <td>Fermé</td>
                            </tr>
                            <tr>
                                <td class="day">Dimanche & Férié</td>
                                <td>9H30 - 12H30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row" id="grand_champs">

                    <address class="mobile-12 tablette-12 pc-12 l-12 col-3">
                        1 route de vannes<br>
                        56390 Grand-Champ<br>
                        <a href="0952461614"> Tel : 09.52.46.16.14</a>
                    </address>

                    <table class="mobile-12 tablette-12 pc-12 l-12 col-8 horaireMag">
                        <tbody>
                            <tr>
                                <td class="day">Lundi</td>
                                <td>Fermé</td>
                            </tr>
                            <tr>
                                <td class="day">Mardi Mercredi Jeudi Vendredi</td>
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
                </div>
            </article>

        </section class="container">
        <div class="row">
            <div id="map" class="mobile-12 tablette-12 pc-12 l-12 col-12 map"></div>
        </div>
    </main>
    
    <?php include_once 'views/includes/footer.php'?>
    
<script src="<?= PATH?>assets/js/auto.js" defer></script>
<script src="<?= PATH?>assets/js/openstreetmap.js" defer ></script>
<script src="<?= PATH?>assets/js/contact.js" defer></script>
</body>

</html>