<h1>Ajouter un produit</h1>
<?php

if (isset($_POST['albator'])) {
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $nomProduit = isset($_POST['nomProduit']) ? $_POST['nomProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";

    $nomPhoto = $_FILES['photo']['name'];
    $typePhoto = $_FILES['photo']['type'];
    $tmpPhoto = $_FILES['photo']['tmp_name'];
    $errorPhoto = $_FILES['photo']['error'];
    $sizePhoto = $_FILES['photo']['size'];

    if ($errorPhoto == 0) {

        //$nomPhoto = utf8_decode($nomPhoto);

        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
        $nomPhoto = strtr( $nomPhoto, $unwanted_array );

        //$nomPhoto = utf8_encode($nomPhoto);

        var_dump($nomPhoto);

    }

    else {
        echo "<p>Môrche pô</p>";
    }


}

else {
    require_once "frmProduitAjouter.php";
}