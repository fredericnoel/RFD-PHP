<body>
<header>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                // echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                include_once "./includes/headerLogin.php";

            }

            else {

               echo" <li><a href=\"index.php?page=accueil\">Accueil</a></li>";
               echo "<li><a href=\"index.php?page=produits\">Produits</a></li>";
               echo "<li><a href=\"index.php?page=login\">Login</a></li>";
               echo "<li><a href=\"index.php?page=inscription\">Inscription</a></li>";

           echo " <li><a href=\"index.php?page=contact\">Contact</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>
<main>