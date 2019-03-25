<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 17/03/19
 * Time: 5:29 PM
 */

require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Achat.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Goodie.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurAchat.php");

$accesseurAchat = new AccesseurAchat();


if (isset($_GET["datetransaction"])){
    $listeTransactions = $accesseurAchat->listerLesTransactionsDunJour($_GET["datetransaction"]);
    $page->datetransaction = $_GET["datetransaction"];

}else{
    $listeTransactions = $accesseurAchat->listerLesTransactions();
}

$page->listeTransactions = $listeTransactions;

afficherPage($page);