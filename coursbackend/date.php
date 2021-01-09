<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
        // Les dates en PHP
        // fonction date ?
        $heureNow = date("j:i:s");
        echo "il est exactement: ".$heureNow."<br>";
        $anneeEncours = date("Y");
        echo "Nous en sommes en ".$anneeEncours."<br>";

        // mise en pratique :
        // Affichez moi la date complère et l'heure qu'il est 
        // 1. "Nous sommes le 08 01 2021 et il est 11:55"

        $dateNow = date("d/m/y" h:i:s);
        echo "Nous sommes le: ".$dateNow."<br>";

        // 2. "Aujourd'hui c'est vendredi 08 janvier 2021, il est 11:55"
        


    ?>
</body>
</html>