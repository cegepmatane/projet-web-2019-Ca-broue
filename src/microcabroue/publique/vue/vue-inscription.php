<?php 

function afficherPremiereEtape()
{?>
 <form>   
<!-- nom utilisateur -->
<div class="form-group">
<label for="nom-utilisateur"></label>
<input type="nom-utilisateur" class="form-control" id="nom-utilisateur">
</div>
<!-- addresse -->
<div class="form-group">
<label for="email"></label>
<input type="email" class="form-control" id="email">
</div>
<!-- Mot de passe -->
<div class="form-group">
<label for="mot-de-passe"></label>
<input type="mot-de-passe" class="form-control" id="mot-de-passe">
</div>
<!-- confirmer Mot de passe -->
<div class="form-group">
<label for="mot-de-passe"></label>
<input type="mot-de-passe" class="form-control" id="mot-de-passe">
</div>
<!-- Prochaine etape -->
<button type="submit" class="btn btn-primary">Poursuivre</button>
</form>
<?php 
}
?>