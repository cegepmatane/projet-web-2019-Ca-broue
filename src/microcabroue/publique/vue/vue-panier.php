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
<h2>Votre Panier</h2>

<?php
function afficherTableauPanier(){
    ?>
    <div id ='table-panier'>
    <table class='table'>
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
  </table>
  </div>
  <?php
}

function afficherBoutton(){

  // TO DO : Verification si l'utilisateur est connecté envoie vers connexion ou choix livraison

  ?>
  
  <div id='continuer-bouttons'>
        <a class='btn btn-secondary' href='boutique'>Revenir à la boutique</a>
        <a class='btn btn-primary' href='connexion'>Commander</a>
  </div>
       
  
  <?php
}


/*
function afficherElementsCommande(){
    echo("<div id='ModeLivraison'>
            <h3 >Mode de livraison</h3>
            <label><input type='radio' name='optradio' checked>Poste Canada</label>
            <label><input type='radio' name='optradio' checked>Fedex</label>
            <label><input type='radio' name='optradio' checked>PuroPost</label>
         </div>
         <hr>
         <div id='ModeLivraison'>
            <h3 >Mode de Paiement</h3>
            <label><input type='radio' name='optradio' checked>Paypal</label>
            <label><input type='radio' name='optradio' checked>Carte de crédit</label>
        </div>
        <button type='button' class='btn btn-primary'>Continuer</button>"

    );
}*/

afficherTableauPanier();
afficherBoutton();
//afficherElementsCommande();