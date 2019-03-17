<?php
require_once($_SERVER["CONFIGURATION_COMMUN"]);
require_once "fragment/entete-fragment.php";
require_once "fragment/pied-de-page-fragment.php";

 $page = (object)
 [
     "titre" => "Recherche d'achat",
     "resultatRecherche" => []
     
 ];

 function afficherResultat($page = null)
 {
    if(!is_object($page))
            $page = (object)[];
    ?>
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
    function afficherChoixDeRecherche($page)
    {
        if(!is_object($page))
            $page = (object)[];
        ?>
        <div class="conteneur">
    <form method="post">
    <select name="choix-recherche">
    <option value="numero-achat">Numéro d'achat</option>
    <option value="date">Date</option>
    <option value="produit">Produit</option>
    <option value="utilisateur">Client</option>
    </select>
    <button type="submit" class="bouton bouton-vert" value="selectionner" name="bouton-choix">Selectionner</button>
    </form>
    </div>
        <?php
    }

    function afficherParNom($page)
    {
        if(!is_object($page))
            $page = (object)[];
        ?>

        <?php
    }

    function afficherParProduit($page)
    {
        if(!is_object($page))
            $page = (object)[];
        ?>
        
        <?php
    }
    function afficherParDate($page)
    {
        if(!is_object($page))
            $page = (object)[];
        ?>
        
        <?php
    }
    function afficherParNumero($page)
    {
        if(!is_object($page))
            $page = (object)[];
        ?>
        <div class="conteneur">
        <form method="post">
        <input type="hidden" name="choix-recherche" value="<?=$_POST['choix-recherche']?>">
        <label for="numero-achat">Numéro de d'achat</label>
        <input type="text" name="numero-achat" value="000000">
        <button type="submit" class="bouton bouton-vert" name="bouton-recherche" value="rechercher"> Rechercher</button>
        </form>
        </div>
        <?php
    }


 require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-recherche-achat.php");

?>