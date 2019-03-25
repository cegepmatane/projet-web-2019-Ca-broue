<?php 
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");
require_once("../../commun/vue/fragment/tableau-panier.php");

//TO DO verifier dans controleur premiere etape et deuxieme etape
$page = (object)
[
    "style" => "decoration/style-paiement.css",
    "titre" => "paiement",
    "isPremiereEtape" => true,
    "isSecondeEtape" => false,
    "dossier" => true,
];

function afficherAdresseFacturation()
{
    ?>
    <h1>Votre adresse de facturation </h1>
    
    <div>
        <p> atatatatatatat </p>
</div>
<?php
}

function afficherPremiereEtapeLivraison($page = null)
{
?>
        <h1>Mode de livraison</h1>

    <form method="post">
        <div class='form-group ligne'>
            <label><input type='radio' name='optradio' checked>Poste Canada</label>
            <label><input type='radio' name='optradio' checked>Fedex</label>
            <label><input type='radio' name='optradio' checked>PuroPost</label>
        </div>
        <!-- Prochaine etape -->
        <button type="submit" class="btn btn-primary" name="action-aller-seconde-etape" value="naviguer">Poursuivre</button>
    </form>
<?php
}

function afficherDeuxiemeEtapePaiement($page = null)
{
?>
    <form>
        <h1>Mode de Paiement</h1>
        <div id="form-group">
            <form action="">
                <p>Vous serez redirigé vers le site Paypal afin de valider votre paiement.</p>
                <input type="checkbox" name="vehicle" value="Bike"> J'accepte les conditions générales de vente<br>
            </form>
        </div>
        <!-- Prochaine etape -->
        <button type="submit" class="bouton bouton-primaire" name="action-aller-premiere-etape" value="naviguer">
                Revenir
            </button>
        <button type="submit" class="btn btn-primary" name="action-payer" value="payer">Paiement</button>
    </form> 
<?php
}



function afficherPage($page = null)
{
    if(!is_object($page)) $page = (object)[];

    afficherEntete($page);

    echo "<div class='conteneur carte-livraison'>";

    if($page->isPremiereEtape == true)
    {
        afficherPremiereEtapeLivraison($page);
    }
    if($page->isSecondeEtape == true)
    {
        afficherDeuxiemeEtapePaiement($page);
    }
    echo "</div>";

    afficherPiedDePage($page);
}

require_once("../../../microcabroue_com_utilisateur/action/action-paiement.php");


