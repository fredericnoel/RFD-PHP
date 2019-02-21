<h1>Inscription</h1>
<?php

if (isset($_POST['maurice'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreurs = array();

    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($erreurs, "Veuillez saisir un nom correct.");

    if (!(mb_strlen($prenom) >= 2 && ctype_alpha($prenom)))
        array_push($erreurs, "Veuillez saisir un prénom correct.");

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");

    if (mb_strlen($mdp) < 6)
        array_push($erreurs, "Votre mot de passe doit comporter 6 caractères minimum");

    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;

        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }

        $message .= "</ul>";

        echo $message;

        include "frmInscription.php";
    } else {
        $sql = "SELECT COUNT(*) FROM t_users WHERE USEMAIL='". $mail . "'";
        $nombreOccurences = $pdo->query($sql)->fetchColumn();

        if ($nombreOccurences == 0) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $sql = "INSERT INTO T_USERS
                (USENOM, USEPRENOM, USEMAIL, USEPASSWORD)
                VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail . "', '" . $mdp . "')";

            $query = $pdo->prepare($sql);
            $query->bindValue('USENOM', $nom, PDO::PARAM_STR);
            $query->bindValue('USEPRENOM', $prenom, PDO::PARAM_STR);
            $query->bindValue('USEMAIL', $mail, PDO::PARAM_STR);
            $query->bindValue('USEPASSWORD', $mdp, PDO::PARAM_STR);
            $query->execute();

            $msg = "Inscription OK";
            $sujet = "Validation de votre inscription";

            $headers = 'From: manu@elysee.fr' . "\r\n" .
                'Reply-To: manu@elysee.fr' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if (mail($mail, $sujet, $msg, $headers)) {
                echo "Inscription OK";
            }

            else {
                echo "Probleme d'inscription";
            }

        }

        else {
            echo "Vous êtes déjà dans la BDD";
        }

    }

} else {
    require_once "frmInscription.php";
}
