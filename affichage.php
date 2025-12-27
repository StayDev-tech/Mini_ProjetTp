<?php
include("./connexion/connexion.php");

// Récupération de tous les produits
$sql = "SELECT * FROM Produit";
$result = mysqli_query($idcon, $sql);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to top, aquamarine, white);
            font-size: 100%;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 2px solid #444;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #ddd;
        }
    </style>
</head>

<body>

    <h2 style="text-align:center;">Liste des Produits</h2>

    <table>
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th>Prix unitaire</th>
            <th>Unité</th>
        </tr>

        <?php while ($tab = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
            <tr>
                <td><?= $tab['code'] ?></td>
                <td><?= $tab['designation'] ?></td>
                <td><?= $tab['prix_unit'] ?></td>
                <td><?= $tab['unite'] ?></td>
                <td>
                    <!-- Exemple : bouton supprimer -->
                    <a href="suppression.php?code=<?= $tab['code'] ?>" onclick="return confirm('Supprimer ce produit ?');">Supprimer</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>

</body>

</html>

<?php include("./connexion/deconnexion.php");
