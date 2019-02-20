<?php
if (!isset($mail)) $mail = "";
?>
<form method="post" action="http://localhost/RFD-PHP1/index.php?page=login">
    <div>
        <label for="mail">Mail&nbsp;: </label>
        <input type="text" id="mail" name="mail" value="<?=$mail?>" />
    </div>
    <div>
        <label for="mdp">Mot de passe&nbsp;: </label>
        <input type="password" id="mdp" name="mdp" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="barnabe" />
</form>