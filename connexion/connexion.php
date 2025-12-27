<?php
$idcon = mysqli_connect('localhost', 'root', '');
if ($idcon == TRUE) {
    // echo "Connexion au serveur reussie.";
    $db = mysqli_select_db($idcon, "Shop");
}
