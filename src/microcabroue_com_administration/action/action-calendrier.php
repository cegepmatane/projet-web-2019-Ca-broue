<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 24/03/19
 * Time: 5:29 PM
 */

require_once (CHEMIN_SRC_DEV."microcabroue_com_administration/lib/calendrier.php");

$calendrier = new Calendar();

$page->calendrier = $calendrier;

afficherPage($page);