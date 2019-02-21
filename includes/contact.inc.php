<h1>Contact</h1>

<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {

        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $mail = $_SESSION['mail'];



        if (isset($_POST['maurice'])) {
            $texte = trim(isset($_POST['texte']) ? $_POST['texte'] : "");
    $erreurs = array();
    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($erreurs, "Veuillez saisir un nom correct.");

    if (!(mb_strlen($prenom) >= 2 && ctype_alpha($prenom)))
        array_push($erreurs, "Veuillez saisir un prénom correct.");

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");

    if ($texte == "" )
        array_push($erreurs, "Votre message est vide.");

    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;

        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }

        $message .= "</ul>";

        echo $message;




       }
        else {
        echo "Votre message a bien été envoyé!";}
        }
        }require_once "frmContact.php";}
?>