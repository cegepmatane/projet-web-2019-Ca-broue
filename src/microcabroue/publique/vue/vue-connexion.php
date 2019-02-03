<?php
include_once("../../commun/vue/fragment/entete-fragment.php");
include_once("../../commun/vue/fragment/pied-de-page-fragment.php");

$page = (object)
    [
    "titre" => "panier",
    "titrePrincipal" => "Le titre principal H1",
    "itemMenuActif" => "accueil"
    ];

    afficherEntete($page);
?>
<?php

function afficherPartieConnexion(){
    ?>
    <h2>Connectez vous !</h2>

    <div id='connexion'>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Utilisateur" aria-label="utilisateur">
            <input class="form-control mr-sm-2" type="text" placeholder="Mot de passe" aria-label="motDePasse">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>
        </form>
    </div>

    <?php
}

function afficherPartieInscription(){
    ?>
    <h2>Nouveau client ?</h2>

        <div id='inscription'>
            <a class='btn btn-secondary' href='inscription'>Inscrivez vous !</a>

        </div>
    <?php
}

afficherPartieConnexion();
afficherPartieInscription();

?>