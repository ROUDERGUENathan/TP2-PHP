<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Résultat</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

    <header>
        <img src="logophp.png">
    </header>

    <nav>
        <a href="index.php">Exercice 1 : ACHAT</a>
        <a href="../Exercice2/index.php">Exercice 2 : DONS</a>
    </nav>

    <section>

        <h1>Exercice 1 </h1>

        <?php

        $professeur = $_POST["professeur"];
        $cours = $_POST["cours"];
        $nombre = $_POST["nombre"];

        if ($professeur == "" || $cours == "" || $nombre == "") {

            echo "<p>Un ou plusieurs champs sont incomplets.</p>";

        } else {

            echo "<p>Vous avez commandé <b>$nombre</b> cours de <b>$cours</b> auprès de <b>$professeur</b>.</p>";

        }

        ?>

        <a href="index.php">Retour</a>

    </section>

</div>

</body>
</html>