<?php include('../connexion/connexion.php') ?>

<?php

if (isset($_GET['supprimer'])) {
    $code = $_GET['code'];
    $sql = "SELECT * FROM produit WHERE code='$code' ";
    $resultat = mysqli_query($idcon, $sql);

    $recup = mysqli_fetch_array($resultat, MYSQLI_ASSOC);

    // if (isset($_GET['code'])) {
    //     $code = $_GET['code'];
    //     $sql = "DELETE FROM produit WHERE code = '$code'";


    //     if (mysqli_query($idcon, $sql)) {
    //         // Redirection avec message
    //         header("Location: suppression.php?msg=ok");
    //         exit();
    //     } else {
    //         echo "Erreur : " . mysqli_error($idcon);
    //     }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Suppression</title>
        <link rel="stylesheet" href="../styleCss/style3.css">
    </head>

    <body>

        <h2>Suppression Produits</h2>

        <form action="" method="get" onsubmit="return confirmerSuppression()">
            <input type="hidden" name="code" value="<?= $recup['code'] ?>">
            <table>
                <tr>
                    <th>Code</th>
                    <th>Designation</th>
                    <th>Prix Unitaire</th>
                    <th>Unite</th>
                </tr>
                <tr>
                    <td> <?= $recup['code'] ?></td>
                    <td> <?= $recup['designation'] ?></td>
                    <td> <?= $recup['prix_unit'] ?></td>
                    <td> <?= $recup['unite'] ?></td>
                </tr>
            <?php
        }
            ?>
            </table>
            <button type="submit" name="soumettre">Supprimer</button>
        </form>

        <script>
            function confirmerSuppression() {
                return confirm("Es-tu sûr de vouloir supprimer ce produit ?");
            }
        </script>
    </body>

    </html>

    <?php
    include("../connexion/connexion.php");

    if (isset($_GET['soumettre'])) {
        $code = $_GET['code'];

        $sql = "DELETE FROM produit WHERE code = '$code'";


        if (mysqli_query($idcon, $sql)) {
            // Redirection avec message
            header("Location: ../supprimer_produit/suppression.php?msg=ok");
            exit();
        } else {
            echo "Erreur : " . mysqli_error($idcon);
        }
    }
    ?>