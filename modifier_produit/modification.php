<?php include('../connexion/connexion.php') ?>
<?php

$message = "";
if (isset($_GET['msg']) && $_GET['msg'] == "ok") {
    $message = "Produit modifié avec succès !";
}
// Charger les produits
$sql = "SELECT code, designation FROM produit";
$result = mysqli_query($idcon, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styleCss/style2.css">
</head>

<body>
    <div class="form-container">
        <h2>Modification Produit</h2>

        <?php if ($message != ""): ?>
            <p class="success-message">
                <?= $message ?>
            </p>
        <?php endif; ?>

        <form action="../modifier_produit/modif_action.php" method="GET">

            <label for="code">Produit à modifier :</label>
            <select name="code" id="code" required>
                <option value="">-- Choisir un produit --</option>

                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <option value="<?= $row['code'] ?>">
                        <?= $row['code'] . " - " . $row['designation'] ?>
                    </option>
                <?php endwhile; ?>

            </select>
            <button type="submit" name="valider">Modifier</button>
        </form>
    </div>
</body>

</html>