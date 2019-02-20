<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {

        $bonjour = $_SESSION['prenom'] . " " . $_SESSION['nom'];

    }
}else
{
    unset($bonjour);
}
?>

        <body>
        <div class="jumbotron">
        <header>
            <?php
                if(isset($bonjour)) {
                    echo "<p>Bonjour $bonjour</p>";
                }
 ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="index.php?page=accueil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=produits">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=inscription">Inscription</a></li>
                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login'] == 1 ){
                        echo "<li class=\"nav-item active\"><a class=\"nav-link\"  href=\"index.php?page=logout\">Logout</a></li>";
                    }else{
                        echo "<li class=\"nav-item active\"><a class=\"nav-link\"  href=\"index.php?page=login\">Login</a></li>";
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>

                </ul>
            </nav>
        </header>
        <main>