<?php

if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($mail)) $mail = "";
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
<form method="post" action="index.php?page=contact">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">

        <label for="nom">Nom&nbsp;: </label>
        <input type="text" class="form-control" id="nom" name="nom" required="required" value="<?=$nom?>" />
    </div>
    <div class="form-group">
        <label for="prenom">Prénom&nbsp;: </label>
        <input type="text" class="form-control id="prenom" name="prenom" required="required" value="<?=$prenom?>" />
    </div>
    <div class="form-group">
        <label for="mail">Mail&nbsp;: </label>
        <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
        <input type="text" class="form-control id="mail" name="mail" required="required" value="<?=$mail?>" />
        </div></div></div>
    <div class="form-group">
        <label for="texte">Votre message&nbsp;: </label>
        <textarea id="texte" class="form-control" name="texte" rows="9" cols="45" require placeholder="Message" value="<?=$texte?>"/></textarea>
    </div>
    <div class="col-md-12">
        <input class="btn btn-primary pull-right" type="reset" value="Effacer" />
        <input class="btn btn-primary pull-right" type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="maurice" />
        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</div>
