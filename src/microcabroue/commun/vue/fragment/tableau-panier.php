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
          for($i=0;$i<sizeof($page->listePanier);$i++){
            
            echo" <tr>
            <th scope='row'>$i</th>
            <td>".$page->listePanier[$i]->nom_fr."</td>
            <td>".$page->listePanier[$i]->quantitee."</td>
            <td>".$page->listePanier[$i]->prix." $ </td>
            <td><a href='?id=".$page->listePanier[$i]->id."' class='btn btn-danger my-2 my-sm-0' '>Supprimer</a></td>
            </tr>";

          }
        }

?>  