<?php

header("Content-Type: image/png");

$noms = array();
$dons = array();

if (file_exists("resultats.txt")) {

    $lignes = file("resultats.txt");

    foreach ($lignes as $ligne) {

        $ligne = trim($ligne);

        if ($ligne == "") {
            continue;
        }

        $donnees = explode(" | ", $ligne);

        $noms[] = $donnees[0];
        $dons[] = (float) $donnees[3];
    }
}

$largeur = 700;
$hauteur = 400;

$image = imagecreatetruecolor($largeur, $hauteur);

$blanc = imagecolorallocate($image, 255, 255, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
$bleu = imagecolorallocate($image, 70, 130, 220);
$gris = imagecolorallocate($image, 200, 200, 200);

imagefill($image, 0, 0, $blanc);

imagestring($image, 5, 260, 10, "Montant des dons", $noir);

$nombrePoints = count($dons);

if ($nombrePoints > 0) {

    $donMax = max($dons);
    if ($donMax == 0) {
        $donMax = 1;
    }

    $margeGauche = 40;
    $margeDroite = 20;
    $margeBas = 60;
    $margeHaut = 40;

    $zoneLargeur = $largeur - $margeGauche - $margeDroite;
    $zoneHauteur = $hauteur - $margeHaut - $margeBas;

    if ($nombrePoints > 1) {
        $ecart = $zoneLargeur / ($nombrePoints - 1);
    } else {
        $ecart = 0;
    }

    imageline($image, $margeGauche, $margeHaut, $margeGauche, $hauteur - $margeBas, $noir);
    imageline($image, $margeGauche, $hauteur - $margeBas, $largeur - $margeDroite, $hauteur - $margeBas, $noir);

    $points = array();

    for ($i = 0; $i < $nombrePoints; $i++) {

        $x = round($margeGauche + $i * $ecart);
        $y = round(($hauteur - $margeBas) - ($dons[$i] / $donMax) * $zoneHauteur);

        $points[$i] = array((int) $x, (int) $y);
    }

    for ($i = 0; $i < $nombrePoints - 1; $i++) {

        imageline($image, $points[$i][0], $points[$i][1], $points[$i + 1][0], $points[$i + 1][1], $bleu);
    }

    for ($i = 0; $i < $nombrePoints; $i++) {

        $x = $points[$i][0];
        $y = $points[$i][1];

        imagefilledellipse($image, $x, $y, 8, 8, $bleu);

        imagestring($image, 2, $x - 15, $hauteur - $margeBas + 5, $noms[$i], $noir);
        imagestring($image, 2, $x - 15, $y - 18, $dons[$i] . " EUR", $noir);
    }

} else {

    imagestring($image, 4, 250, 200, "Aucun don pour le moment", $noir);
}

imagepng($image);
imagedestroy($image);

?>
