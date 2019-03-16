<?php

function afficherTableauPanierModifiable($page = null){
  ?>
  <div class='conteneur'> <h2>Votre Panier</h2>
  <div id ='table-panier'>
  <table class='table'>
  <thead>
    <tr>
      <th scope='col'>n°</th>
      <th scope='col'>Article</th>
      <th scope='col'>Quantité</th>
      <th scope='col'>Prix TTC</th>
    </tr>
  </thead>
  <tbody>

  <?php
      /** @var Goodie $goodie */
      for($i=0;$i<sizeof($page->listePanier);$i++){
        echo" <tr>
        <th scope='row'>$i</th>
        <td>".$page->listePanier[$i]->getNomFr()."</td>
        <td>1</td>
        <td>".$page->listePanier[$i]->getPrix()." $ </td>
      </tr>";
      }

    }

    function afficherTableauPanier($page = null){
      ?>
      <div class='conteneur'> <h2>Votre Panier</h2>
      <div id ='table-panier'>
      <table class='table'>
      <thead>
        <tr>
          <th scope='col'>n°</th>
          <th scope='col'>Article</th>
          <th scope='col'>Quantité</th>
          <th scope='col'>Prix TTC</th>
          <th scope='col'>Supprimer</th>
        </tr>
      </thead>
      <tbody>
    
      <?php
          /** @var Goodie $goodie */
          //for($i=0;$i<sizeof($page->listePanier);$i++){
          foreach($page->listePanier as $panier)
          {
            echo" <tr>
            <th scope='row'></th>
            <td>".$panier->nom_fr."</td>
            <td>".$panier->quantitee."</td>
            <td>".$panier->prix." $ </td>
            <td><a href='?id=".$panier->id."' class='btn btn-danger my-2 my-sm-0' '>Supprimer</a></td>
            </tr>";

          }
        }

?>  