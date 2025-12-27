<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleCss/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Développeur web et mobile</h1>
        </header>
        <div class="main-container">
            <aside>
                <div class="menu">
                    <ul>
                        <li><a href="#" onclick="loadPage('./ajout_produit/ajout.php')">Ajout</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" onclick="loadPage('affichage.php')">Affichage</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" onclick="loadPage('./modifier_produit/modification.php')">Modification</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" onclick="loadPage('./supprimer_produit/suppression.php')">Suppression</a></li>
                    </ul>
                </div>
            </aside>
            <main>
                <iframe src="" id="content-frame"></iframe>
            </main>
        </div>
        <footer>
            Promotion :
        </footer>
    </div>

    <script src="./JavaScript/script.js"></script>
</body>

</html>