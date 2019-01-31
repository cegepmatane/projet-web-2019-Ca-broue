<?php
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");

$page = (object)
    [
    "style" => "acceuil.css",
    "titre" => "panier",
    "titrePrincipal" => "Le titre principal H1",
    "itemMenuActif" => "accueil"
    ];

afficherEntete($page);

?>
<h2>Votre Panier</h2>

<?php
function afficherTableauPanier(){
    echo("<table class='table'>
    <thead>
      <tr>
        <th scope='col'>n°</th>
        <th scope='col'>Article</th>
        <th scope='col'>Quantité</th>
        <th scope='col'>Disponibilité</th>
        <th scope='col'>Prix TTC</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope='row'>1</th>
        <td>Tshirt ça broue brun large</td>
        <td>1</td>
        <td>En stock</td>
        <td>28.80$</td>
      </tr>
      <tr>
        <th scope='row'>2</th>
        <td>Choppe ca broue</td>
        <td>2</td>
        <td>En stock</td>
        <td>12.50$</td>
      </tr>
    </tbody>
  </table>");
}

function afficherElementsConnexion(){
    echo("<div id='connexion'><h3 >Êtes-vous déjà inscrit ?</h3>
    <button type='button' class='btn btn-primary'>Connecter</button>
    </div>
    <div id='inscription'><h3 >Vous n'êtes pas inscrit ?</h3>
    <button type='button' class='btn btn-primary'>S'inscrire</button>
    </div>

    ");
}

afficherTableauPanier();
afficherElementsConnexion();