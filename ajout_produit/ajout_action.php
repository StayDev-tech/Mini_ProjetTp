<?php include("../connexion/connexion.php"); ?>
<?php
if (isset($_GET['valider'])) {
    $code = $_GET['code'];
    $designation = $_GET['designation'];
    $pu = $_GET['pu'];
    $unite = $_GET['unite'];

    $BD = "INSERT INTO Produit (code, designation, prix_unit, unite) VALUES ('$code','$designation','$pu','$unite')";
    // $insertion = mysqli_query($idcon, $BD);

    if (mysqli_query($idcon, $BD)) {
        // Redirection avec message
        header("Location: ../ajout_produit/ajout.php?msg=ok");
        exit();
    } else {
        echo "Erreur : " . mysqli_error($idcon);
    }
}
?>


<?php include("./connexion/deconnexion.php"); ?>