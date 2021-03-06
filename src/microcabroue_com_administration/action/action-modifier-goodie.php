<?php 
    require_once (CHEMIN_CODE."microcabroue_com_commun/accesseur/AccesseurEntiteGoodie.php");

    $accesseurEntiteGoodie = new AccesseurEntiteGoodie();

    if(isset($_POST["action-modifier"]) && ($_POST["action-modifier"] == "ajout" || $_POST["action-modifier"] == "modification" || $_POST["action-modifier"] == "suppression")){
        $filtreGoodie = array(
            Goodie::ID => FILTER_SANITIZE_NUMBER_INT,
            Goodie::ID_CATEGORIE => FILTER_SANITIZE_NUMBER_INT,
            Goodie::NOM_FR => FILTER_SANITIZE_STRING,
            Goodie::NOM_EN => FILTER_SANITIZE_STRING,
            Goodie::PRIX => FILTER_SANITIZE_STRING,
            Goodie::DESCRIPTION_FR => FILTER_SANITIZE_STRING,
            Goodie::DESCRIPTION_EN => FILTER_SANITIZE_STRING,
            Goodie::DESCRIPTION_LONGUE_EN => FILTER_SANITIZE_STRING,
            Goodie::DESCRIPTION_LONGUE_FR => FILTER_SANITIZE_STRING,
        );

        $goodieTemp = filter_var_array($_POST, $filtreGoodie);
        
        $goodie = new Goodie((object)
        [
            Goodie::ID => $goodieTemp[Goodie::ID],
            Goodie::ID_CATEGORIE => $goodieTemp[Goodie::ID_CATEGORIE],
            Goodie::NOM_FR =>$goodieTemp[Goodie::NOM_FR],
            Goodie::NOM_EN =>$goodieTemp[Goodie::NOM_EN],
            Goodie::PRIX => $goodieTemp[Goodie::PRIX],
            Goodie::DESCRIPTION_FR =>$goodieTemp[Goodie::DESCRIPTION_FR],
            Goodie::DESCRIPTION_EN =>$goodieTemp[Goodie::DESCRIPTION_EN],
            Goodie::DESCRIPTION_LONGUE_EN =>$goodieTemp[Goodie::DESCRIPTION_LONGUE_EN],
            Goodie::DESCRIPTION_LONGUE_FR =>$goodieTemp[Goodie::DESCRIPTION_LONGUE_FR],
        ]);

        if($_POST["action-modifier"] == "ajout")
            $accesseurEntiteGoodie->ajouter($goodie);
        else if($_POST["action-modifier"] == "modification")
            $accesseurEntiteGoodie->modifier($goodie);
        else if($_POST["action-modifier"] == "suppression")
            $accesseurEntiteGoodie->supprimer($goodie->getId());

        header('Location: '.LIEN_DOMAINE.'admin/goodies');
    }
?>