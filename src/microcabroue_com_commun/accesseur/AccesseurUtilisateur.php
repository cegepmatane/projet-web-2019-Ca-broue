<?php
require_once("BaseDeDonnee.php");
require_once(CHEMIN_RACINE_SECTION . "/modele/Utilisateur.php");
class AccesseurUtilisateur
{
    private static $connexion = null;


    

    public function recupererListeUtilisateur(){
        $listeUtilisateur=[];
        $listeUtilisateur[]= new Utilisateur((object)
        [
            "id" => 1,
            "nom" =>"levy",
            "prenom" => "florian",
            "adresse_postal" => "616 avenue st redempteur",
            "code_postal" => "G4W 1L1",
            "ville" => "Matane",
            "mail" => "flolevy33@gmail.com",
            "pseudo" => "darkfloflo",
            "mot_passe" => "floflo"

            
        ]);
        $listeUtilisateur[]= new Utilisateur((object)
        [
            "id" => 1,
            "nom" =>"toto",
            "prenom" => "tata",
            "adresse_postal" => "616 avenue st redempteur",
            "code_postal" => "G4W 1L1",
            "ville" => "Matane",
            "mail" => "flolevy33@gmail.com",
            "pseudo" => "toto",
            "mot_passe" => "tata"
        ]);
        return $listeUtilisateur;
    }

    public function ajouterUtilisateur($utilisateur){

       $SQL_AJOUTER = "INSERT INTO utilisateur (nom, prenom, adresse_postal, code_postal, ville, mail, pseudo, mot_passe) 
        VALUES ('?','?','?','?','?','?','?','?')";

        
        $requete = self::$connexion->prepare($SQL_AJOUTER);

        $requete.bindParam(1, $utilisateur->nom);
        $requete.bindParam(2, $utilisateur->prenom);
        $requete.bindParam(3, $utilisateur->adresse_postal);
        $requete.bindParam(4, $utilisateur->code_postal);
        $requete.bindParam(5, $utilisateur->ville);
        $requete.bindParam(6, $utilisateur->mail);
        $requete.bindParam(7, $utilisateur->pseudo);
        $requete.bindParam(8, $utilisateur->mot_passe);

        self::$connexion->execute();


        echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 

    }

    function __construct(){

        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
        print_r($connexion);    
    }
}