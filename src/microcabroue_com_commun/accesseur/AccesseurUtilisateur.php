<?php
require_once("BaseDeDonnee.php");
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/modele/Utilisateur.php");
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
        VALUES (:nom,:prenom,:adresse,:code_postal,:ville,:mail,:pseudo,:mot_passe)";

        
        $requete = self::$connexion->prepare($SQL_AJOUTER);
        $nom = $utilisateur->getNom();
        $prenom = $utilisateur->getPrenom();
        $adresse = $utilisateur->getAdresse_postal();
        $code_postal = $utilisateur->getCode_postal();
        $ville = $utilisateur->getVille();
        $mail = $utilisateur->getMail();
        $pseudo = $utilisateur->getPseudo();
        $mot_passe = $utilisateur->getMot_passe();

        var_dump($SQL_AJOUTER);

        $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $requete->bindParam(':code_postal', $code_postal, PDO::PARAM_STR);
        $requete->bindParam(':ville', $ville, PDO::PARAM_STR);
        $requete->bindParam(':mail', $mail, PDO::PARAM_STR);
        $requete->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $requete->bindParam(':mot_passe', $mot_passe, PDO::PARAM_STR);

        $requete->execute();


        echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 

    }

    function __construct(){

        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
        print_r($connexion);    
    }
}