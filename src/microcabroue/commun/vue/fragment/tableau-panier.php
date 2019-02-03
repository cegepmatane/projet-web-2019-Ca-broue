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


?>