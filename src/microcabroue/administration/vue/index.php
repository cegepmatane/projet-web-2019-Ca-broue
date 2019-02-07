<?php
    include_once "fragment/entete-fragment.php";
    include_once "fragment/pied-de-page-fragment.php";

    $page = (object)
    [
        "titre" => "Panneau d'adminstration",
        "titrePrincipal" => "Panneau d'adminstration - Ça Broue !",
        "itemMenuActif" => "",
    ];

    function afficherPage($page = null){
        if(!is_object($page))
            $page = (object)[];
        
        afficherEntete($page);

        ?>

        <h2><?= $page->titre; ?></h2>

        <div>
            Si vous ne possèdez pas les droits vous ne devriez pas être ici.
        </div>

        <?php
    }

    afficherPage($page);

    afficherPiedDePage($page);
?>