<?php

require_once("../../../microcabroue_publique/modele/Goodie.php");
//require_once("../../../microcabroue_publique/modele/CategorieGoodie.php");
//require_once("../../../microcabroue_publique/accesseur/AccesseurEntiteCategorieGoodie.php");
require_once("../../../microcabroue_publique/accesseur/AccesseurEntiteGoodie.php");

//$accesseurEntiteCategorieGoodie = new AccesseurEntiteCategorieGoodie();
$accesseurEntiteGoodie = new AccesseurEntiteGoodie();

$goodie =$accesseurEntiteGoodie->recupererGoodie();
?>