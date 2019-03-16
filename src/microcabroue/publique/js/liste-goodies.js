function demanderAChargerGoodies(id_categorie) {
    parametre = "categorie=" + id_categorie;
    ajax = new Ajax();
    ajax.executer("GET", url, parametre, recevoirGoodies);
}
function recevoirGoodies(ajax) {
    reponse = ajax.responseText;
    document.getElementById('conteneur-goodie').innerHTML = reponse;

}