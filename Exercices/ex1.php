<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css"/>
</head>



<body>

<h1>
    Exercice de PHP : 
    Syntaxe de base du langage
</h1>


<h2>Exemple a : Hello World!</h2>

<?php echo "<p>Hello World!</p>" ?>

<h2>Exemple b : définitions de variables et constantes</h2>

<?php
    // Définition de variable
    $texteDuParagraphe = "Hello World!";
    $entier = 7;
    $decimal = 10.5;
    $x = 12.5; // reconnait les premiers caractères comme étant un type decimal
    $y = 4;
    $z = $x + $decimal;

    // Définition de constante
    define("VITESSE_MAX", 300000);
    define("AGE_LIMITE", 14);

    // echo $texteDuParagraphe;
    // echo $entier;
    // echo $decimal;

    // echo $VITESSE_MAX; est une erreur car ce n'est PAS une VARIABLE mais une CONSTANTE
    // echo VITESSE_MAX;
    // echo " ";
    // echo constant("VITESSE_MAX");  
?>

<?php echo "<p>".$z."</p>" ?>


<h2>Exemple c : incrémentation et décrémentation</h2>

<?php
    // Incrémentation (ajoute 1)
    $z++;
    $z = $z + 1; // Exactement le même résultat que la ligne précédente
    $z += 1; // Exactement le même résultat que la ligne précédente

    // Décrémentation (retire 1)
    $z--;
    $z = $z - 1; // Exactement le même résultat que la ligne précédente
    $z -= 1; // Exactement le même résultat que la ligne précédente

    // Exemple supplémentaire
    $z = $entier + $entier - $decimal;
?>

<p><?php echo $z ?></p>

<h2>Exemple d : php dans une balise html</h2>

<ul>
    <li><?php echo $texteDuParagraphe; ?></li>
    <li><?php echo $entier; ?></li>
    <li><?php echo $decimal; ?></li>
    <li><?php echo $x; ?></li>
    <li><?php echo $y; ?></li>
    <li><?php echo $z; ?></li>
</ul>

<h2>Exemple e : html dans une balise php </h2>

<?php echo "<p>".$texteDuParagraphe."</p>"; // "." concaténation ?>
<?php echo "<p>"."Hello World!"."</p>"; // Exactement le même résultat que la ligne précédente ?>
<?php echo "Hello World!"; // Exactement le même résultat que la ligne précédente ?>

<?php echo "<a href='https://google.fr'>".$z."</a>" ?>
<?php echo '<a href="https://google.fr">'.$z.'</a>' // Exactement le même résultat que la ligne précédente?>

<?php echo 
    "<p>
        Sayah a dit : 
        <q cite='https://google.fr'>BONJOUR L'HISTOIRE !</q>
    <p>"
?>

<h2>Exemple f : rappels html/css </h2>

<p class="attention">
    Il faut nettoyer la plaie avant de mettre le 
    pansement sinon il y a un risque d'infection.
</p>

<p>
   Vous pouvez appeler les secours en composant le numéro.
</p>

<p class="attention">
   Veillez à être CLAIR, BREF et PRECIS sur le danger et 
   sur le lieu de l'accident
</p>

</body>
</html>