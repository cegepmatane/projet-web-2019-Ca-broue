<?php
class AccesseurUtilisateur
{

    public function recupererUtilisateur(){
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
}