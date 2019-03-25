<?php
    include_once("../../commun/vue/fragment/entete-fragment.php");
    include_once("../../commun/vue/fragment/pied-de-page-fragment.php");

    $page = (object)[
        "style" => "publique/decoration/a-propos.css",
        "titre" => "À propos de nous",
        "titrePrincipal" => "À propos de nous",
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];

        afficherEntete($page);

        ?>

        <div>
            <h2 class="notre-mission">Notre mission</h2>
            <hr>
            <p class="notre-mission-text">Le but de notre projet est de créer un site web commercial avec un moyen de payement comme Paypal, le projet était principalement fait en PHP. Nous devions gérer les différentes pages à l'intégration serveur en passant par l'utilisation du "Modèle", "Vue", "Contrôleur" et par le référencement du site sur les moteurs de recherche. </p>
            <p class="notre-mission-text2">Étant de grands amateurs de bière nous n'avons donc pas hésité sur le choisis. Malheureusement, la vente de bière en ligne est interdite au Canada, on a donc décidé de vendre des goodies liés à notre brasserie. Nous avons quand même une page dédié à nos bières, où les différents visiteurs pourront voir des images et une description complète de nos produits.</p>
        </div>

        <!-- faire une boucle pour tout les membres du projet -->
        <h2 class="notre-equipe">Notre équipe</h2>
        <hr class="separation">
        <div class="col-md-12">
        <div class="row">
            <div class= "col-4">
                <div class="michael">
                    <img class="image-membre" src="<?= LIEN_DOMAINE?>publique/illustration//membre-image/Michael.jpg" alt="photo-du-membre">
                    <h1>Michaël</h1> 
                    <h5><b>Expert en PHP</b></h5>
                </div>
            </div>
           
            <div class= "col-4">
                <div class="alexandre">
                <img class="image-membre" src="<?= LIEN_DOMAINE?>publique/illustration//membre-image/Alexandre.jpg" alt="photo-du-membre">
                    <h1>Alexandre</h1>
                    <h5><b>Expert en Mv live</b></h5>
                </div>
            </div>

            <div class= "col-4">
                <div class="sedrick">
                <img class="image-membre" src="<?= LIEN_DOMAINE?>publique/illustration//membre-image/Sedrick.jpg" alt="photo-du-membre">
                    <h1>Sedrick</h1>
                    <h5><b>Fortnite player</b></h5>
                </div>
            </div>

            <div class= "col-4 ajustement">
                <div class="florian">
                <img class="image-membre" src="<?= LIEN_DOMAINE?>publique/illustration//membre-image/Florian.jpg" alt="photo-du-membre" >
                    <h1>Florian</h1>
                    <h5><b>Expert en communication</b></h5>
                </div>
            </div>

            <div class= "col-4">
                <div class="alec">
                <img class="image-membre" src="<?= LIEN_DOMAINE?>publique/illustration//membre-image/Alec.jpg" alt="photo-du-membre">
                    <h1>Alec</h1>
                    <h5><b>Expert en documentatiion</b></h5>
                </div>
            </div>
            </div>
        </div>
        </div>
        <?php

        afficherPiedDePage($page);
    }
 
    afficherPage($page);
?>