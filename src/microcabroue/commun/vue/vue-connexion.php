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
        <form method="post" >
            <div class='form-group ligne'>

                <input class="input-connexion col-6" type="text" id="pseudo" name="pseudo" placeholder="Utilisateur" aria-label="utilisateur">
                <input class="input-connexion col-6" type="password" id="mot-de-passe" name="mot_passe" placeholder="Mot de passe" aria-label="motDePasse">
            </div>
            <a  href='inscription'>Pas encore inscrit ?</a>
            <button class="bouton-validation" name="action-connexion" value="connexion" type="submit"><a href="accueil">Connexion</a></button>
        </form>
    <?php
}


echo "<div class='conteneur carte-connexion'>";
afficherPartieConnexion();

echo "</div>";  

require_once("../../../microcabroue_com_commun/action/action_connexion.php");


?>