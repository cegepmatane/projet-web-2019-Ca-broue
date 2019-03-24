<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 17/03/19
 * Time: 5:02 PM
 */

include_once "fragment/entete-fragment.php";
include_once "fragment/pied-de-page-fragment.php";

$page = (object)
[
    "titre" => "Historiques des transactions",
];

function afficherPage($page = null){
    if(!is_object($page))
        $page = (object)[];

    afficherEntete($page);

    if (!isset($page->listeTransactions)){
        echo"<p>Erreur dans le chargement des transactions</p>";
        return;
    }
    ?>
    <hr>
    <br>
    <div class="row">
        <hr>

        <div class="col-2 ">
            <br/>
            <h4 class="d-flex justify-content-center">
                <?php
                    if(isset( $page->datetransaction)){
                        echo"Transactions du : ". $page->datetransaction;
                    }
                ?>
            </h4>

        </div>
        <div class="col-10">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Numéro de transaction </th>
                    <th scope="col">Prix de vente </th>
                    <th scope="col">Quantité </th>
                    <th scope="col">Nom du goodie </th>
                    <th scope="col">Client </th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($page->listeTransactions as $transaction) {

                    ?>
                    <tr>
                        <th scope="row"><?= $transaction[Achat::DATE]?> </th>
                        <td><?= $transaction[Achat::NUMERO_TRANSACTION] ?></td>
                        <td><?= $transaction[Achat::PRIX] ?> $</td>
                        <td><?= $transaction[Achat::QUANTITE] ?></td>
                        <td><?= $transaction['goodie']->getNomFr() ?></td>
                        <td><?= $transaction['utilisateur']->getPrenom(). " ". $transaction['utilisateur']->getNom() ?></td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-1"> </div>

    </div>



    <!--  <div class="texte-rouge texte-index">
          Si vous ne possèdez pas les droits vous ne devriez pas être ici.
      </div>
  -->
    <?php

    afficherPiedDePage($page);
}

require_once (CHEMIN_CODE."microcabroue_com_administration/action/action-liste-transaction.php");

?>