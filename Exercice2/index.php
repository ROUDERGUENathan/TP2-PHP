<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Dons</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

    <header>
        <img src="logophp.png">
    </header>

    <nav>
        <a href="../Exercice1/index.php">Exercice 1 : ACHAT</a>
        <a href="#">Exercice 2 : DONS</a>
    </nav>

    <section>

        <h1>Exercice 2 </h1>

        <form action="enregistrer.php" method="post">

            <label>Nom :</label>
            <input type="text" name="nom">

            <label>Age :</label>
            <input type="number" name="age">

            <label>Mail :</label>
            <input type="email" name="mail">

            <label>Valeur du don en € :</label>
            <input type="number" name="don">

            <br>

            <input type="submit" value="Soumettre">

        </form>

        <br>

        <a href="resultats.php">Résultats</a>

    </section>

</div>

</body>
</html>