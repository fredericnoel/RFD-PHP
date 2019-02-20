<h1>Login</h1>
<?php

if (isset($_POST['barnabe'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreurs = array();

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

        include "frmLogin.php";
    } else {
        echo "Test matching login/password";

        $getDatas =  "SELECT * FROM t_users
                        WHERE USEMAIL='". $mail . "'";

        $result = $pdo->query($getDatas)->fetch(PDO::FETCH_ASSOC);

        $_SESSION['nom'] = $result['USENOM'];
        $_SESSION['prenom'] = $result['USEPRENOM'];
        $_SESSION['mail'] = $result['USEMAIL'];
        $hash = $result['USEPASSWORD'];


       if (password_verify($mdp, $hash)) {
            $_SESSION['login'] = 1;
            $redirection = "<script>document.location.href='http://localhost/RFD-PHP1/'</script>";
            echo $redirection;
        }

        else {
            echo "L'adresse et le mot de passe ne correspondent pas.";
        }
  }

} else {
    require_once "frmLogin.php";
}
