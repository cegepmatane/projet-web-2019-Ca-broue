<?php

//Le chemin vers le code PHP de la section nom_de_domaine_com_commun
//qui est hors du $_SERVER['DOCUMENT_ROOT'].
//Idéalement, une variable d'environnement devrait être utilisée.

define("CHEMIN_RACINE_COMMUN", $_SERVER['CHEMIN_RACINE_COMMUN']);

//Le chemin vers le code PHP des vues de la section commun
define("CHEMIN_VUE_COMMUN", $_SERVER['DOCUMENT_ROOT'] . "/commun/vue");


//Définir l'URL du site pour la partie non PHP de la
//section nom_de_domaine_com_commun.
define("URL_COMMUN", $_SERVER['HTTP_HOST'] . "/commun");

//Inclusion du fichier de mot de passe et des informations de connexion à la
//base de données.
require_once(CHEMIN_RACINE_COMMUN . "/configuration/mot-de-passe.php");

//Définition des constantes de connexion à la base de données.
define("BASE_DE_DONNEE_HOST", '127.0.0.1');
define("BASE_DE_DONNEE_NOM", $baseDeDonnee);
define("BASE_DE_DONNEE_UTILISATEUR", $utilisateur);
define("BASE_DE_DONNEE_MOT_DE_PASSE", $motDePasse);
define("BASE_DE_DONNEE_CHARSET", 'utf8mb4');

//Définir ici toutes les constantes communes à l'ensemble du site

function determinerSectionWebCourante(){

    $cheminAbsolutFichierPrincipal = getcwd();

    $cheminRelatifSectionWeb = str_replace($_SERVER['DOCUMENT_ROOT'], $cheminAbsolutFichierPrincipal,"");
    $tableau =explode("/", $cheminRelatifSectionWeb);
    //$sectionWeb = $tableau[1];
    $sectionWeb = $tableau[0]; // TODO mis 1 pour enelever le warning

    return $sectionWeb;

}

function determinerSectionCodeCourante($sectionWebCourante){

    $listeNomRepertoire = explode("/", $_SERVER['DOCUMENT_ROOT']);

    $nomRepertoireDocumentRoot = $listeNomRepertoire[sizeof($listeNomRepertoire) - 1];
    $sectionCode = $nomRepertoireDocumentRoot  . $sectionWebCourante;

    return $sectionCode;

}

$sectionWebCourante = determinerSectionWebCourante();

//L'URL du site pour la partie non PHP de la section
//nom_de_domaine_com_publique.
define("URL_SECTION", $_SERVER['HTTP_HOST'] . "/" . $sectionWebCourante);


$sectionCodeCourante = determinerSectionCodeCourante($sectionWebCourante);

//Le chemin vers le code PHP de la section
//nom_de_domaine_com_publique ou
//nom_de_domaine_com_utilisateur ou
//nom_de_domaine_com_adminitration ou
//nom_de_domaine_com_commun
//qui est hors du $_SERVER['DOCUMENT_ROOT'].
//TODO mis en commentaire pour enlever les warning
define("CHEMIN_RACINE_SECTION","/var/www/html/projet-web-2019-Ca-broue/src/microcabroue_com_commun/" .$sectionCodeCourante);

// if("microcabroue_com_commun" != $sectionCodeCourante){

//     require_once(CHEMIN_RACINE_SECTION ."configuration/configuration.php");

// }

define("CHEMIN_SRC_DEV", "/var/www/html/projet-web-2019-Ca-broue/src/");
define("CHEMIN_CODE", "/var/www/html/projet-web-2019-Ca-broue/src/");