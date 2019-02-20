
<?php
if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($mail)) $mail = "";
?>

<div class="container">
    <div class="row">
<form method="post" class="col-md-9 go-right" action="index.php?page=inscription">
    <div class="form-group">
        <input class="form-control" type="text" id="nom" name="nom" value="<?=$nom?>" />
        <label for="nom">Nom&nbsp;: </label>

    </div>
    <div class="form-group">
        <input  class="form-control"  type="text" id="prenom" name="prenom" value="<?=$prenom?>" />
        <label for="prenom">Prénom&nbsp;: </label>

    </div>
    <div class="form-group">
        <input  class="form-control"  type="text" id="mail" name="mail" value="<?=$mail?>" />
        <label for="mail">Mail&nbsp;: </label>

    </div>
    <div class="form-group">
        <input  class="form-control"  type="password" id="mdp" name="mdp" />
        <label for="mdp">Mot de passe&nbsp;: </label>

    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="maurice" />
</form>
    </div>
</div>