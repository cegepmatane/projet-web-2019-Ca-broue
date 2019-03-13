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
            <p>Mettre la mission ici !!!!</p>
        </div>

        <!-- faire une boucle pour tout les membres du projet -->
        <div>
            <img src="" alt="photo-du-membre">
            <h3>Nom du membre</h3>
            <p>Description du membre</p>
        </div>

        <?php

        afficherPiedDePage($page);
    }
 
    afficherPage($page);
?>