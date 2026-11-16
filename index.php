<?php
require_once "./config/settings.php";
require_once "./functions/filters.php";
require_once "./functions/labels.php";
require_once "./functions/princing.php";
$vehicules=[["id" => 1 , "modele" => "Renault Clio" , "jour" => 3 ,"categorie" => "eco" , "statut" => "dispo"],
["id" => 2 , "modele" => "Peugeot 208 " , "jour" => 8 ,"categorie" => "eco" , "statut" => "maintenance"],
["id" => 3 , "modele" => "Range Rover " , "jour" => 10 ,"categorie" => "luxe" , "statut" => "louee"],
["id" => 4, "modele" => "Mercedes Classe E" , "jour" => 2 ,"categorie" => "luxe" , "statut" => "dispo"],
["id" => 5, "modele" => "Dacia Duster " , "jour" => 5 ,"categorie" => "suv" , "statut" => "dispo"]];
$diponible=function filtrerDisponibles($vehicules);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>revision</title>
</head>
<body>
    <div class="grille">
        <?php foreach ($vehicules as $v): ?>
            <?php 
                $badge =  getBadgeCategorie($v[string $code]);($v['categorie']);
                $libelleStatut = getLibelleStatut($v[string $code]);
                $prix = calculerPrixLocation($v['j'], t); 
            ?>
            <article class="carte statut-<?= strtolower($v['statut']) ?>">
                <h2><?= $v['modele'] ?> (<?= $v['jours'] ?> j)</h2>
                
                <span class="badge <?= $badge['classe'] ?>">
                    <?= $badge['libelle'] ?>
                </span>
                
                <p><strong>Statut :</strong> <?= $libelleStatut ?></p>
                
                <p><strong>Prix estimé :</strong> <?= $prix ?> TND</p>
            </article>
        <?php endforeach; ?>
    </div>
   
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flotte AutoLoc</title>
    <!-- Appel de la feuille de style CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div>
……
</div>
<section> recap(à faire) </section>
</body>
</html>
<!-- Section Récapitulatif -->
<section class="recapitulatif">
        <h2>Récapitulatif</h2>
        
        <p><strong>Nombre total de véhicules :</strong> <?= count($voitures) ?></p>
        
        <h3>Véhicules disponibles :</h3>
        <ul>
            <?php foreach ($disponibles as $d): ?>
                <?php $b = getBadgeCategorie($d['categorie']); ?>
                <li><?= $d['modele'] ?> - <?= $b['libelle'] ?></li>
            <?php endforeach; ?>
        </ul>
    </section>



