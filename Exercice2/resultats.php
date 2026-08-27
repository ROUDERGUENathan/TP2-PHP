<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Résultats</title>

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

        <h1>Résultats</h1>

        <?php

        $fichier = "resultats.txt";

        $total = 0;
        $sommeAges = 0;
        $nombrePersonnes = 0;

        if (file_exists($fichier)) {

            $lignes = file($fichier);

            foreach ($lignes as $ligne) {

                $donnees = explode(" | ", trim($ligne));

                $nom = $donnees[0];
                $age = $donnees[1];
                $mail = $donnees[2];
                $don = $donnees[3];

                echo "<p>";
                echo "$nom | $age ans | $mail | $don €";
                echo "</p>";

                $total = $total + $don;
                $sommeAges = $sommeAges + $age;
                $nombrePersonnes++;
            }

            if ($nombrePersonnes > 0) {
                $moyenneAge = $sommeAges / $nombrePersonnes;
            } else {
                $moyenneAge = 0;
            }

            echo "<p><b>Total reçu : $total €</b></p>";

            echo "<p><b>Moyenne d'âge : ";
            echo round($moyenneAge, 2);
            echo " ans</b></p>";

        } else {

            echo "<p>Aucun don pour le moment.</p>";
        }

        ?>

        <a href="index.php">Retour</a>

    </section>

</div>

</body>
</html>