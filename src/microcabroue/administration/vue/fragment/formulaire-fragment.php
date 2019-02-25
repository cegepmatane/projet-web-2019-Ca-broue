<?php

    function afficherFormulaire($page = null){
        if(!is_object($page))
            return;

        switch($page->type){
            case "biere":
                include "fragment/formulaire-biere-fragment.php";
                break;
            case "goodie":
                include "fragment/formulaire-goodie-fragment.php";
                break;
            case "utilisateur":
                include "fragment/formulaire-utilisateur-fragment.php";
                break;
        }
?>
        <div class="contenu">
<?php
        afficherChamps($page);
?>      </div>
<?php
    }
?>