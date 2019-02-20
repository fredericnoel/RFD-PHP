<h1>Contact</h1>

<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {

        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $mail = $_SESSION['mail'];
    }

    require_once "frmContact.php";
}
?>