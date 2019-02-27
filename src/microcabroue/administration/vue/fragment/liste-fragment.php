<?php
    function preparerListe($page = null){
        if(!is_object($page))
            return;

        if($page->type != "utilisateur"){ ?>
        <div class="contenu bouton-ajouter">
                <a href="./vue-ajouter-<?= $page->type; ?>.php" class="bouton bouton-vert">Ajouter</a>
                </div>
        <?php }

        switch($page->type){
            case "biere":
                include "fragment/liste-biere-fragment.php";
                break;
            case "goodie":
                include "fragment/liste-goodie-fragment.php";
                break;
            case "utilisateur":
                include "fragment/liste-utilisateur-fragment.php";
                break;
        }
        ?>
        <div class="contenu">
<?php
        afficherListe($page);
        ?>      </div>
<?php
    }
?>