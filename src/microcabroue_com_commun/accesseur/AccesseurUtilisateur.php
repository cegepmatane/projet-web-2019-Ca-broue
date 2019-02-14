<?php
require_once("BaseDeDonnee.php");
require_once(CHEMIN_SRC_DEV . "microcabroue_com_commun/modele/Utilisateur.php");
class AccesseurUtilisateur
{
    private static $connexion = null;

    function __construct(){

        if(!self::$connexion) self::$connexion =  BaseDeDonnee::getConnexion();
    }

    public function verifierUtilisateur($pseudo){

        $SQL_VERIFIER = "SELECT pseudo, mot_passe, id FROM utilisateur WHERE pseudo = :pseudo";

        $requete = self::$connexion->prepare($SQL_VERIFIER);
        $requete->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $requete->execute();
        $donnees = $requete->fetch(PDO::FETCH_OBJ);
        return $donnees;
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

        $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $requete->bindParam(':code_postal', $code_postal, PDO::PARAM_STR);
        $requete->bindParam(':ville', $ville, PDO::PARAM_STR);
        $requete->bindParam(':mail', $mail, PDO::PARAM_STR);
        $requete->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $requete->bindParam(':mot_passe', $mot_passe, PDO::PARAM_STR);

        $requete->execute();
    }

  
}