<?php include('../connexion/connexion.php') ?>
<?php

// Message si redirection avec ?msg=ok
$message = "";
if (isset($_GET['msg']) && $_GET['msg'] == "ok") {
    $message = "Produit supprimé avec succès !";
}

// Charger les produits
$sql = "SELECT code, designation FROM produit";
$result = mysqli_query($idcon, $sql);

?>



<!DOCTYPE html>
<html>

<head>
    <title>Suppression produit</title>
    <link rel="stylesheet" href="../styleCss/style2.css">
</head>

<body>

    <div class="form-container">
        <h2>Suppression Produit</h2>

        <?php if ($message != ""): ?>
            <p class="success-message">
                <?= $message ?>
            </p>
        <?php endif; ?>

        <form action="../supprimer_produit/suppression_action.php" method="GET">

            <label for="code">Produit à supprimer :</label>
            <select name="code" id="code" required>
                <option value="">-- Choisir un produit --</option>

                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <option value="<?= $row['code'] ?>">
                        <?= $row['code'] . " - " . $row['designation'] ?>
                    </option>
                <?php endwhile; ?>

            </select>

            <button type="submit" name="supprimer">Supprimer</button>
        </form>
    </div>
    <!-- <script>
        function confirmerSuppression() {
            return confirm("Es-tu sûr de vouloir supprimer ce produit ?");
        }
    </script> -->

</body>

</html>