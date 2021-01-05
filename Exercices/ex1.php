<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>ALLO PHP - Site de formation PHP</title>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Découvrez les joies de la programmation PHP sur ALLO PHP, meilleur site de formation PHP." />
</head>

<body>

<h1>
    😄 Exercice de PHP&nbsp;: 
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

<p>23</p>

<h2>Exemple c : incrémentation et décrémentation</h2>

<?php
    // Incrémentation (ajoute 1)
    $z++; // Similaire à "++$z"
    $z = $z + 1; // Exactement le même résultat que la ligne précédente
    $z += 1; // Exactement le même résultat que la ligne précédente

    // Décrémentation (retire 1)
    $z--; // Similaire à "--$z"
    $z = $z - 1; // Exactement le même résultat que la ligne précédente
    $z -= 1; // Exactement le même résultat que la ligne précédente

    // Exemple supplémentaire
    $z = $entier + $entier - $decimal;
?>

<p><?php echo $z ?></p>

<h2>Exemple d&nbsp;: php dans une balise html</h2>

<ul>
    <li><?php echo $texteDuParagraphe; ?></li>
    <li><?php echo $entier; ?></li>
    <li><?php echo $decimal; ?></li>
    <li><?php echo $x; ?></li>
    <li><?php echo $y; ?></li>
    <li><?php echo $z; ?></li>
</ul>

<h2>Exemple e&nbsp;: html dans une balise php </h2>

<?php echo "<p>".$texteDuParagraphe."</p>"; // "." concaténation ?>
<?php echo "<p>"."Hello World!"."</p>"; // Exactement le même résultat que la ligne précédente ?>
<?php echo "Hello World!"; // Exactement le même résultat que la ligne précédente ?>

<?php echo "<a href='https://google.fr'>".$z."</a>" ?>
<?php echo '<a href="https://google.fr">'.$z.'</a>' // Exactement le même résultat que la ligne précédente ?>

<?php echo 
    "<p>
        Sayah a dit : 
        <q>Bonjour l'Histoire !</q> 
        et il a aussi ajouté : <q>Hello people !</q>
    <p>"
?>

<h2>Exemple f&nbsp;: rappels html/css </h2>

<p class="attention">
    Il faut nettoyer la plaie avant de mettre le 
    pansement sinon il y a un risque d'infection.
</p>

<p>
   Vous pouvez appeler les secours en composant le numéro.
</p>

<p class="attention">
   Veillez à être CLAIR, BREF et PRECIS sur le danger et 
   sur le lieu de l'accident.
</p>

<?php print("<h2>YO !</h2>"); ?>


<h2>Exemple g : les opérateurs php </h2>

<?php 
    $x = 20;
    $y = 6;
?>

<ul>
    <li><?php echo ($x + $y); // Affiche 26 ?></li>
    <li><?php echo ($x - $y); // Affiche 14 ?></li>
    <li><?php echo ($x * $y); // Affiche 120 ?></li>
    <li><?php echo ($x / $y); // Affiche 3.3333333... ?></li>
    <li><?php echo ($x % $y); // Affiche 2 ?></li>

    <?php
        $y = 20;
        $y += 100; // similaire à "$y = $y + 100;"
        echo "<li>".$y."</li>"; // Affiche 120

        $z = 50;
        $z -= 25;
        echo "<li>".$z."</li>"; // Affiche 25

        $i = 5;
        $i *= 6; // similaire à "$i = $i * 6"
        echo "<li>".$i."</li>"; // Affiche 30

        $j = 10;
        $j /= 5;
        echo "<li>".$j."</li>"; // Affiche 2

        $k = 20;
        $k %= 7;
        echo "<li>".$k."</li>"; // Affiche 6

        $o = "Bonjour";
        $o .= ", monde ! ";
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde !"
        $o .= $o; // similaire à "$o = $o . $o"
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde ! Bonjour, monde !"

        $x = 100;
        $y = "100";
        echo "<li>";
            var_dump($x == $y); // "valeur égale à"
        echo "</li>";

        echo "<li>";
            var_dump($x === $y); // "valeur et type égaux à"
        echo "</li>";

        echo "<li>";
            var_dump($x != $y); // "valeur différente de"
        echo "</li>";

        echo "<li>";
            var_dump($x !== $y); // "valeur et types différents de"
        echo "</li>";

        $a = 50;
        $b = 90;
        echo "<li>";
            var_dump($a > $b); // "strictement supérieur à"
        echo "</li>";

        echo "<li>";
            var_dump($a >= $b); // "supérieur ou égal à"
        echo "</li>";

        echo "<li>";
            var_dump($a < $b); // "strictement inférieur à"
        echo "</li>";

        echo "<li>";
        var_dump($a <= $b); // "inférieur ou égal à"
    echo "</li>";
    ?>
</ul>

<h2>Exemple h&nbsp;: les opérateurs logiques </h2>
<ul>
    <li><?php var_dump(true AND false); // ET ?></li>
    <li><?php var_dump(true OR false); // OU ?></li>
    <li><?php var_dump(true && false); // ET ?></li>
    <li><?php var_dump(true || false); // OU ?></li>
    <li><?php var_dump(!true); // NON (ici : NON VRAI, soit FAUX) ?></li>
    <li><?php var_dump(!false); // NON (ici : NON FAUX, soit VRAI) ?></li> 
</ul>

<h2> Exemple i&nbsp;: les conditions </h2>


<?php
    $x = 3;
    echo "<p>";
    if ($x >= 10) { // 10 et +
        echo "Bonjour&nbsp;!";
    } elseif ($x < 5) {
        echo "Salut&nbsp;!"; // 0, 1, 2, 3 ou 4
    } else {
        echo "Rien à faire."; // 5, 6, 7, 8, 9
    }
    

    $favcolor = "red";
    echo "<p>";
    switch ($favcolor) {
        case "red":
            echo "Votre couleur préférée est le rouge&nbsp;!";
        break;
        case "blue":
            echo "Votre couleur préférée est le bleu&nbsp;!";
        break;
        case "green":
            echo "Votre couleur préférée est le vert&nbsp;!";
        break;
        default:
            echo "Vous n’avez pas de couleur préférée&nbsp;!";
    }
    echo "</p>";


    
    $x = 1;

    echo "<ul>";
    while($x <= 5) {
        echo "<li>$x</li>";
        $x++;
    }
    echo "</ul>";

    $x = 1;
    echo "<ul>";
    do {
        echo "<li>$x</li>";
        $x++;
    } while ($x <= 5);

    echo "</ul>";

    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    
    /* TP 1
    - Déclarer une variable $x = 1 et une variable $y = 835
    - En utilisant la boucle "while" ajoutez successivement 1 à x
      jusqu'à qu'il soit égale à y. Dans ce cas, affichez x et y
    - Donnez une variante de cet boucle avec la boucle do... while
    - Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000
    - Utilisez la boucle for pour tester si le nombre 3457 est premier
*/
 /* 1er - Déclarer une variable $x = 1 et une variable $y = 835
    - En utilisant la boucle "while" ajoutez successivement 1 à x
      jusqu'à qu'il soit égale à y. Dans ce cas, affichez x et y */

$x=1;
$y=835;
echo "<ul>";
while ($x < $y) {
    $x++;
}
echo "<li>$y</li>";
echo "<li>$x</li>";
echo "</ul>";
/* 2eme - - Donnez une variante de cet boucle avec la boucle do... while */

$x = 1;
$y=835;
echo "<ul>";
do {
    $x++;
} while ($x<$y);
echo "<li>$y</li>";
echo "<li>$x</li>";
echo "</ul>";

/* 3eme-Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000 */

$i=7; 

echo "<ul>";
while($i<1000)
{
    $i=$i+7; 
}
echo "<li>$i</li>";
echo "</ul>";
"</ul>";

/* 3eme-Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000 */


   
echo "<ul>";  
    for ($x = 7; $x <= 1000; $x += 7)
    {
        echo "<li>$x</li>" ;
    }       
echo "</ul>";

/* 3eme-Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000 */

$x = 7; 
     while($x <= 1000)
    { $x += 7;
     
        echo "<li>$x</li>" ;
    }    
    echo "</ul>";
"</ul>";



// 4eme-Utilisez la boucle for pour tester si le nombre 3457 est premier


for ($i = 2; $i < 3457; $i++) {
    if (3457 % $i == 0)
    {
        echo " Le nombre 3457 n'est pas premier";
        break;
    }  
    else if ($i==3456)
    {
        echo "Le nombre 3457 est premier";
    }
}

// 4emebis-Utilisez la boucle for pour tester si le nombre 3457 est premier

$i = 2;
$N = 3457;
echo "<ul>";
for ($i = 2; $i <= $N; $i++) {
    if ($N % $i == 0 && $N!=$i) {
        echo $N." n'est pas un nombre premier";
        break;
    }
    else if($N==$i) {
        echo $N."est un nombre premier";
        break;
    }
}
echo "</ul>";



$cars[0] = "Dacia";
$cars[1] = "BMW";
$cars[2] = "Toyota";


$cars = ["Dacia", "BMW", "Toyota"]; // similaire aux 3 lignes précédentes
$cars = array("Dacia", "BMW", "Toyota", "Peugeot"); // similaire à la ligne précédente

$cars[] = "Renault";  // permet d'ajouter un élément en fin de tableau
$cars[] = "Mercedes";
echo "<p>".$cars[0]." et ".$cars[2]."</p>";
$cars[2] = "Mitsubishi";
echo "<p>".$cars[0]." et ".$cars[2]."</p>";

echo "<p>".count($cars)."</p>"; // fonction count($variable) qui permet de mesurer la taille d'une variable


//PARCOURS DE TABLEAU
$taille = count($cars);
echo "<ol type='A' reversed>";
for($i = 0; $i < $taille ;$i++) {
    echo "<li>".$cars[$i]."</li>";
}
echo "</ol>";
?>

<!-- Exemples d'utilisation correcte de 'ul' et 'ol' -->


<h2> Ma recette de gateau </h2>

<ul>
    <h3> Ingrédients : </h3>
    <li> 100g de farine </li>
    <li> 10g de sucre </li>
    <li> 3 carrés de chocolat </li>
</ul>
<ol>
    <h3> Réalisation : </h3>
    <li> bla bla </li>
    <li> bla bli blou</li>
    <li> bla bli blo</li>
</ol>
<?php


/* Exercice :
    Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).*/
// boucle For:
$Mois = array("Janvier", "Fevrier", "Mars", "Avril","Mai", "Juin", "Juillet", "Aout","Septembre", "Octobre", "Novembre", "Decembre");
for ($numero = 0; $numero < 12; $numero++)
{
    echo $Mois[$numero] . '<br/>';
}
// Boucle While:
$Mois = array("Janvier", "Fevrier", "Mars", "Avril","Mai", "Juin", "Juillet", "Aout","Septembre", "Octobre", "Novembre", "Decembre");

$numero = 0;
while ($numero < 12)
    {
    echo $Mois[$numero] . '<br />';
    $numero++;
}

// Boucle do,while:

/*     Exercice :
    Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.
*/


$Pays['France'] = 'Paris';
$Pays['Norvège'] = 'Oslo';
$Pays['Sénégal'] = 'Dakar';
$Pays['Inde'] = 'New Delhi';
$Pays['Chine'] = 'Pekin';
$Pays['Mexique'] = 'Mexico';

foreach($Pays as $element)
{
    echo $element . '<br />'; 
}
?>

<?php
/*Écrire un tableau x avec comme données "A", "B", "C" et "D".
    Un tableau y avec comme données "E", "F", "G" et "H"

    À l'aide d'une boucle de votre choix, mettre y à la suite de x.
    À l'aide d'une boucle de votre choix, afficher x.
*/
$X = array("A", "B", "C", "D");
$Y = array("E", "F", "G", "H");
array_push($X,"E", "F", "G", "H");

foreach($X as $element)
{
    echo $element . '<br />'; 
}
?>




</body> 
</html>