<?php
class AccesseurUtilisateur
{
    

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

      /*  $SQL_AJOUTER = "INSERT INTO utilisateur (nom, prenom, adresse_postal, code_postal, ville, mail, pseudo, mot_passe) 
        VALUES ('?','?','?','?','?','?','?','?')";*/

        echo "<script>alert(\"Inscription! WOOOOOOOOOOO\")</script>"; 

    }
}