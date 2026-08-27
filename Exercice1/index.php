<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 ACHAT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

    <header>
        <img src="logophp.png">
    </header>

    <nav>
        <a href="#">Accueil</a>
        <a href="#">Exercice 1 : ACHAT</a>
        <a href="../Exercice2/index.php">Exercice 2 : DONS</a>
    </nav>

    <section>

        <h1>Exercice 1 </h1>

        <form action="page2.php" method="post">

            <label>Professeur :</label>

            <select name="professeur">
                <option value="M. GIROD">M. GIROD</option>
                <option value="Made. AGOSTINELLI">Made. AGOSTINELLI</option>
                <option value="Made. DONNE">Made. DONNE</option>
                <option value="Made. VOGLER">Made. VOGLER</option>
            </select>

            <label>Liste des cours :</label>

            <select name="cours">
                <?php
                include("cours.php");

                foreach($cours as $c){
                    echo "<option>$c</option>";
                }
                ?>
            </select>

            <label>Nombre de séances de cours à commander :</label>

            <input type="number" name="nombre">

            <br>

            <input type="submit" value="soumettre">

        </form>

    </section>

</div>

</body>
</html>