<?php 
require_once("../../commun/vue/fragment/entete-fragment.php");
require_once("../../commun/vue/fragment/pied-de-page-fragment.php");

$page = (object)
[
    "titre" => "inscription",
    "isPremiereEtape" => true,
    "isSecondeEtape" => false,

];

function afficherPremiereEtapeLivraison($page = null)
{
?>
    <form>
        <h3>Mode de livraison</h3>
        <label><input type='radio' name='optradio' checked>Poste Canada</label>
        <label><input type='radio' name='optradio' checked>Fedex</label>
        <label><input type='radio' name='optradio' checked>PuroPost</label>
    </form>
<?php
}



function afficherPage($page = null)
{
    if(!is_object($page)) $page = (object)[];

    afficherEntete($page);

    if($page->isPremiereEtape == true)
    {
        afficherPremiereEtapeLivraison($page);
    }
    if($page->isSecondeEtape == true)
    {
        afficherDeuxiemeEtape($page);
    }

    afficherPiedDePage($page);
}

afficherPage($page);

