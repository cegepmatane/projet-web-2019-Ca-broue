<?php
include_once("../../commun/vue/fragment/entete-fragment.php");
include_once("../../commun/vue/fragment/pied-de-page-fragment.php");
include_once("../../commun/vue/fragment/tableau-panier.php");

$page = (object)
    [
    "style" => LIEN_DOMAINE."publique/decoration/panier.css",
    "titre" => "panier",
    "titrePrincipal" => "Le titre principal H1",
    "itemMenuActif" => "panier"
    ];
?>

<?php


function afficherBoutton(){

  // TO DO : Verification si l'utilisateur est connecté envoie vers connexion ou choix livraison

  ?>
  
  <div id='continuer-bouttons'>
        <a class='bouton-secondaire' href='boutique'>Revenir à la boutique</a>
        <a class='bouton-validation' href='utilisateur/paiement'>Commander</a>
  </div>

  <?php
}


afficherEntete($page);

require_once(CHEMIN_CODE."microcabroue_publique/action/action-panier.php");


//afficherElementsCommande();