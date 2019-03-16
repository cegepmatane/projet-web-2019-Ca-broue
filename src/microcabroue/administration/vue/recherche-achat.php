<?php
require_once($_SERVER["CONFIGURATION_COMMUN"]);
require_once "fragment/entete-fragment.php";
require_once "fragment/pied-de-page-fragment.php";

 $page = (object)
 [
     "titre" => "Recherche d'achat",
     "resultatRecherche" => []
     
 ];

 function afficherPage($page = null)
 {
    if(!is_object($page))
            $page = (object)[];

    afficherEntete($page);
    ?>
    <div class="recherche">
    <form method="post">
    <select name="choix-recherche">
    <option value="numero-achat">Numéro d'achat</option>
    <option value="date">Date</option>
    <option value="produit">Produit</option>
    <option value="utilisateur">Client</option>
    </select>
    <input type="text">
    <button type="submit" class="bouton bouton-vert">Rechercher</button>
    </form>
    </div>
    <h4>Résultats de recherche</h4>
    <div class="tableau-resultat">
    <table>
    <tr>
    <th>Numero d'achat</th>
    <th>Date</th>
    <th>Produit</th>
    <th>Quantité</th>
    <th>Client</th>
    </tr>
    <?php 
    if(count($page->resultatRecherche) > 0)
    {
        foreach($page->resultatRecherche as $resultat)
        {
            ?>
            <tr>
                <th><?=$resultat->numero_achat?></th>
                <th><?=$resultat->date?></th>
                <th><?=$resultat->produit?></th>
                <th><?=$resultat->quantite?></th>
                <th><?=$resultat->utilisateur?></th>
            </tr>
            <?php
        }      
    }
    ?>
    </table>
    </div>


    <?php
    afficherPiedDePage($page);
 }
 require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-recherche-achat.php");

?>