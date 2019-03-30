<?php

    require("../../commun/vue/fragment/entete-fragment.php");
    require("../../commun/vue/fragment/pied-de-page-fragment.php");

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
            <p class="notre-mission-text">Notre mission est d’offrir des bières uniques brassées avec passion et par la suite, donner une occasion de la déguster avec une vaste sélection d'événements. </p>
	    <p></p>
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
