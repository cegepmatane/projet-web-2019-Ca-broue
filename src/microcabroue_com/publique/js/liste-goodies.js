ancienneBaliseCategorie= null;
function demanderAChargerGoodies(id_categorie) {
    parametre = "categorie=" + id_categorie;
    ajax = new Ajax();
    ajax.executer("GET", url, parametre, recevoirGoodies);
    if(ancienneBaliseCategorie){
        ancienneBaliseCategorie.classList.remove('active');
    }
    baliseCategorie = document.getElementById('categorie_'+id_categorie);
    baliseCategorie.classList.add('active');
    ancienneBaliseCategorie= baliseCategorie;
}
function recevoirGoodies(ajax) {
    reponse = ajax.responseText;
    document.getElementById('conteneur-goodie').innerHTML = reponse;

}