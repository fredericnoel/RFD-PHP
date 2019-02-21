<h1>Ajouter un produit</h1>
<?php

if (isset($_POST['albator'])) {
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $nomProduit = isset($_POST['nomProduit']) ? $_POST['nomProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";
    $photo = $_FILES['photo'];

    var_dump($photo);
}

else {
    require_once "frmProduitAjouter.php";
}