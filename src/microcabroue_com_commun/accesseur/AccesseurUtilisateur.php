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
    public function modifierUtilisateur($utilisateur, $id)
    {
        $idNetoyer = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $SQL_MODIFIER = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, adresse_postal = :adresse, code_postal = :code_postal, ville = :ville, mail = :mail, pseudo = :pseudo, mot_passe = :mot_passe WHERE id = :id";
        $requete = self::$connexion->prepare($SQL_MODIFIER);
        

        $nom = filter_var($utilisateur->getNom(), FILTER_SANITIZE_STRING);
        $prenom = filter_var($utilisateur->getPrenom(), FILTER_SANITIZE_STRING);
        $adresse = filter_var($utilisateur->getAdresse_postal(), FILTER_SANITIZE_STRING);
        $code_postal = filter_var($utilisateur->getCode_postal(), FILTER_SANITIZE_STRING);
        $ville = filter_var($utilisateur->getVille(), FILTER_SANITIZE_STRING);
        $mail = filter_var($utilisateur->getMail(), FILTER_SANITIZE_STRING);
        $pseudo = filter_var($utilisateur->getPseudo(), FILTER_SANITIZE_STRING);
        $mot_passe = filter_var($utilisateur->getMot_passe(), FILTER_SANITIZE_STRING);
        
    

        $requete->bindValue(':id', $idNetoyer, PDO::PARAM_INT);
        $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $requete->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $requete->bindValue(':code_postal', $code_postal, PDO::PARAM_STR);
        $requete->bindValue(':ville', $ville, PDO::PARAM_STR);
        $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
        $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $requete->bindValue(':mot_passe', $mot_passe, PDO::PARAM_STR);

      
        $requete->execute();
    }

    public function recevoirUtilisateur($id)
    {
        $idNetoyer = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $SQL_RECEVOIR = "SELECT nom, prenom, adresse_postal, code_postal, ville, mail, pseudo, mot_passe FROM utilisateur WHERE id = :id";
        
        $requete = self::$connexion->prepare($SQL_RECEVOIR);
        $requete->bindValue(':id', $idNetoyer, PDO::PARAM_INT);
        $requete->execute();
        $donnees = (object) $requete->fetch(PDO::FETCH_OBJ);
        $utilisateur = new Utilisateur($donnees);
        return $utilisateur;
    }
    public function recevoirUtilisateurParNom($nom, $prenom)
    {
        $nomNetoyer = filter_var($nom, FILTER_SANITIZE_STRING);
        $prenomNetoyer = filter_var($prenom, FILTER_SANITIZE_STRING);
        $SQL_RECEVOIR = "SELECT nom, prenom, adresse_postal, code_postal, ville, mail, pseudo, mot_passe FROM utilisateur WHERE nom = :nom AND prenom = :prenom";
        
        $requete = self::$connexion->prepare($SQL_RECEVOIR);
        $requete->bindValue(':nom', $nomNetoyer, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenomNetoyer, PDO::PARAM_STR);
        $requete->execute();
        $donnees = (object) $requete->fetch(PDO::FETCH_OBJ);
        $utilisateur = new Utilisateur($donnees);
        return $utilisateur;
    }
  
}