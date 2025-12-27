<?php include("../connexion/connexion.php") ?>


<?php $message = "";
if (isset($_GET['msg']) && $_GET['msg'] == "ok") {
    $message = "Produit Ajouté avec succès !";
}  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styleCss/form.css">
</head>
<style>
    .success-message {
        text-align: center;
        margin-bottom: 15px;
        font-weight: bold;
        color: green;
    }
</style>

<body>
    <fieldset>
        <legend>Ajout Produit</legend>

        <?php if ($message != ""): ?>
            <p class="success-message">
                <?= $message ?>
            </p>
        <?php endif; ?>

        <form action="../ajout_produit/ajout_action.php" method="get" class="formulaire" onsubmit="return confirmerAjout()">
            <div id="input">
                <label for="code">Code : </label>
                <input type="text" name="code" placeholder="Entrez le code"> <br>
            </div>
            <div id="input">
                <label for="designation">Designation : </label>
                <input type="text" name="designation" placeholder="Entrez la designation"> <br>
            </div>
            <div id="input">
                <label for="pu">Prix unitaire : </label>
                <input type="text" name="pu" placeholder="Prix unitaire"><br>
            </div>
            <div id="select">
                <label for="unite">Unité : </label>
                <select name="unite" id="unite">
                    <option value="k">K</option>
                    <option value="u">U</option>
                    <option value="m">M</option>
                </select><br>
            </div>
            <button class="btn" name="valider" type="submit">Ajouter</button>
            <!-- <input type="submit" value="Envoyer"> -->
        </form>
    </fieldset>
    <script>
        function confirmerAjout() {
            return confirm("Es-tu sûr de vouloir ajouter ce produit ?");
        }
    </script>
</body>

</html>