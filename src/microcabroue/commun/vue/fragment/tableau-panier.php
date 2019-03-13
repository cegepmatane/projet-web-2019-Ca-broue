<?php


function afficherTableauPanier($page = null){
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

    <?php
        /** @var Goodie $goodie */
        foreach($page->listeGoodies as $goodie){
                      echo" <tr>
                              <th scope='row'>1</th>
                              <td>".$goodie->getNomFr()."</td>
                              <td>1</td>
                              <td>En stock</td>
                              <td>28.80$</td>
                            </tr>";
        }

?>
    
    </tbody>
  </table>
  </div>
  <?php
}


?>