<?php
    include_once("../../commun/vue/fragment/entete-fragment.php");
    include_once("../../commun/vue/fragment/pied-de-page-fragment.php");

    $page = (object)[
        "titre" => "À propos de nous",
        "titrePrincipal" => "À propos de nous",
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];

        afficherEntete($page);

        ?>

        <div>
            <h4>Notre mission est d’offrir des bières uniques brassées avec passion et par la suite, donner une occasion de la déguster avec une vaste sélection d'événements.</h4>
        </div>

        <!-- faire une boucle pour tout les membres du projet -->
        <div class="membre">
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>
        <div class="membre">
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>
        <div class="membre">
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>
        <div class="membre">
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>
        <div class="membre">
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>

        <?php

        afficherPiedDePage($page);
    }
 
    afficherPage($page);
?>