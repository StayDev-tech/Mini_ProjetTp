<?php include("../connexion/connexion.php") ?>

<?php
if (isset($_GET['valider'])) {
    $code = $_GET['code'];
    $sql = "SELECT * FROM produit WHERE code='$code' ";
    $resultat = mysqli_query($idcon, $sql);

    $recup = mysqli_fetch_array($resultat, MYSQLI_ASSOC);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de modification</title>
        <link rel="stylesheet" href="../styleCss/style3.css">
    </head>

    <body>

        <h2>Modification Produits</h2>

        <form action="" method="get" onsubmit="return confirmerModification()">
            <table>
                <tr>
                    <th>Code</th>
                    <th>Code</th>
                    <th>Designation</th>
                    <th>Prix Unitaire</th>
                    <th>Unite</th>
                </tr>
                <tr>
                    <td> <input name="ancienCode" type="hidden" value="<?= $recup['code'] ?>"></td>
                    <td> <input name="code" type="text" value="<?= $recup['code'] ?>"></td>
                    <td> <input name="designation" type="text" value="<?= $recup['designation'] ?>"></td>
                    <td> <input name="pu" type="text" value="<?= $recup['prix_unit'] ?>"></td>
                    <td> <input name="unite" type="text" value="<?= $recup['unite'] ?>"></td>
                </tr>
            <?php
        }
            ?>
            </table>
            <button type="submit" name="soumettre">Modifier</button>
        </form>

        <script>
            function confirmerModification() {
                return confirm("Es-tu sûr de vouloir modifier ce produit ?");
            }
        </script>
    </body>

    </html>


    <?php
    include("../connexion/connexion.php");

    if (isset($_GET['soumettre'])) {

        $code1 = $_GET['ancienCode'];
        $code = $_GET['code'];
        $designation = $_GET['designation'];
        $pu = $_GET['pu'];
        $unite = $_GET['unite'];

        $sql = "UPDATE produit SET code = '$code', designation = '$designation', prix_unit = '$pu', unite = '$unite' 
                    WHERE code = '$code1'";
        $result = mysqli_query($idcon, $sql);

        if (mysqli_query($idcon, $sql)) {
            // Redirection avec message
            header("Location: ../modifier_produit/modification.php?msg=ok");
            exit();
        } else {
            echo "Erreur : " . mysqli_error($idcon);
        }
    }
    ?>