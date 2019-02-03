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


        <form>
            <div class='form-group ligne'>

                <input class="input-connexion col-6" type="text" placeholder="Utilisateur" aria-label="utilisateur">
                <input class="input-connexion col-6" type="text" placeholder="Mot de passe" aria-label="motDePasse">
            </div>
            <a  href='inscription'>Pas encore inscrit ?</a>
            <button class="bouton-validation" type="submit">Connexion</button>
        </form>
    <?php
}


echo "<div class='conteneur carte-connexion'>";
afficherPartieConnexion();

echo "</div>";  

?>