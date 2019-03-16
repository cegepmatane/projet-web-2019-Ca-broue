<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 16/03/19
 * Time: 5:07 PM
 */


require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Achat.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/modele/Goodie.php");
require_once (CHEMIN_SRC_DEV."microcabroue_com_commun/accesseur/AccesseurAchat.php");

$accesseurAchat = new AccesseurAchat();

$listeStatsParGoodie = $accesseurAchat->recupererStatistiqueParGoodie();

$page->listeStatsParGoodie = $listeStatsParGoodie;

var_dump($listeStatsParGoodie);
afficherPage($page);