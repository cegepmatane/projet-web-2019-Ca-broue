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
        $nom = filter_var($utilisateur->getNom(), FILTER_SANITIZE_STRING);
        $prenom = filter_var($utilisateur->getPrenom(), FILTER_SANITIZE_STRING);
        $adresse = filter_var($utilisateur->getAdresse_postal(), FILTER_SANITIZE_STRING);
        $code_postal = filter_var($utilisateur->getCode_postal(), FILTER_SANITIZE_STRING);
        $ville = filter_var($utilisateur->getVille(), FILTER_SANITIZE_STRING);
        $mail = filter_var($utilisateur->getMail(), FILTER_SANITIZE_STRING);
        $pseudo = filter_var($utilisateur->getPseudo(), FILTER_SANITIZE_STRING);
        $mot_passe = filter_var($utilisateur->getMot_passe(), FILTER_SANITIZE_STRING);

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