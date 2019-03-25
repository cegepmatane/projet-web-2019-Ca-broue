<?php 
require_once ($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/entete-fragment.php");
require_once(CHEMIN_SRC_DEV . "microcabroue/commun/vue/fragment/pied-de-page-fragment.php");

$page = (Object)
[
    "style" => "../microcabroue/utilisateur/decoration/mon-compte.css",
    "titre" => "Mon compte",
    "itemMenuActif" => "mon-compte",
    "achats" => []

];

function afficherAchats($page = null)
{
    ?>
    <div class="conteneur" id="achats">
                <h4>Achats</h4>
                    <table class="table">
                <tr>
                    <th scope="col">Numero d'achat</th>
                    <th scope="col">Date</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité</th>
                </tr>
                <?php 
            if(count($page->achats) > 0)
            {
                foreach($page->achats as $achat)
                {
                 ?>
                    <tr>
                        <th scope="row"><?=$achat->numero_achat?></th>
                        <td><?=$achat->date?></td>
                        <td><?=$achat->produit?></td>
                        <td><?=$achat->quantite?></td>
                    </tr>
                <?php
                }      
            }
                ?>
                </table>
            </div>    
                 

            <?php 
}
function afficherPage($page = null, $utilisateur = null)
{
    if (!is_object($page)) $page = (object)[];
    
   
    ?>
    <h2 class="titre">Bonjour <?=$utilisateur->getPrenom()?></h2> 
        
            <div class='conteneur' id="information-compte">
                <h4>Informations sur le compte</h4>
                <p>Nom d'utilisateur: <?=$utilisateur->getPseudo()?>
                <p>Mot de passe: *********
                <p>Adresse email: <?=$utilisateur->getMail()?></p>
                <form method="post">
                <input type="hidden" name="id" value="<?= $utilisateur->getId()?>">
                <input type="hidden" name="type-modification" value="info-compte">
                <button type="submit" name="modifier" class="bouton bouton-bleu" value="modifier-compte">Modifier</button>
                </form>
                
            </div>

            <div class="conteneur" id="information-personnelle">
                <h4>Informations personnelles</h4>
                <p>Nom: <?=$utilisateur->getNom()?></p>
                <p>Prenom: <?=$utilisateur->getPrenom()?></p>
                <p>Adresse: <?=$utilisateur->getAdresse_postal()?></p>
                <p>Code postal: <?=$utilisateur->getCode_postal()?></p>
                <p>Ville: <?=$utilisateur->getVille()?></p>  
                <form method="post">
                <input type="hidden" name="id" value="<?= $utilisateur->getId()?>">
                <input type="hidden" name="type-modification" value="info-personnelle">
                <button type="submit" name="modifier" class="bouton bouton-bleu" value="modifier-info">Modifier</button>
                </form>
            </div>

    <?php
    

}


Require_once(CHEMIN_SRC_DEV . "microcabroue_com_utilisateur/action/mon-compte.php");

?>