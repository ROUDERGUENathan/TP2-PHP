<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Don</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

    <header>
        <img src="logophp.png">
    </header>

    <nav>
        <a href="../Exercice1/index.php">Exercice 1 : ACHAT</a>
        <a href="index.php">Exercice 2 : DONS</a>
        <a href="resultats.php">Résultats</a>
    </nav>

    <section>

        <h1>Don enregistré</h1>

        <?php

        $nom = $_POST["nom"];
        $age = $_POST["age"];
        $mail = $_POST["mail"];
        $don = $_POST["don"];

        if ($nom == "" || $age == "" || $mail == "" || $don == "") {

            echo "<p>Un ou plusieurs champs sont incomplets.</p>";

        } else {

            $ligne = $nom . " | " . $age . " | " . $mail . " | " . $don . "\n";

            file_put_contents("resultats.txt", $ligne, FILE_APPEND);

            echo "<p>Nom : $nom</p>";
            echo "<p>Age : $age ans</p>";
            echo "<p>Mail : $mail</p>";
            echo "<p>Don : $don €</p>";

        }

        ?>

        <a href="index.php">Retour</a>

    </section>

</div>

</body>
</html>