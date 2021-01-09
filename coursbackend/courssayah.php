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
      jusqu'à qu'il soit égal à y. Dans ce cas, affichez x et y
    - Donnez une variante de cet boucle avec la boucle do... while
    - Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000
    - Utilisez la boucle for pour tester si le nombre 3457 est premier
*/

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

// PARCOURS DE TABLEAU
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

<h2> Les tableaux associatifs </h2>

<?php

    $age = array("Zakaria"=>"27","Fatima"=>"37","Rida"=>"43");

    foreach ($age as $donneeAge) {
        echo "<p>".$donneeAge."</p>";
    }

    /*
    Exercice :
    Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).
    Exercice :
    Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.
    Exercice :
    Écrire un tableau x avec comme données "A", "B", "C" et "D".
    Écrire un tableau y avec comme données "E", "F", "G" et "H"
    À l'aide d'une boucle de votre choix, mettre y à la suite de x.
    À l'aide d'une boucle de votre choix, afficher x.
    */


    $age = array("Linda"=>"10","Zakaria"=>"27",
                "Fatima"=>"37","Rida"=>"43","Nadia"=>"15");
    echo "<ul>";
    foreach($age as $name=>$value) {
        echo "<li>".$name." a ".$value." printemps !"."</li>";
        if ($value <= 10) echo "<p>Enfant !</p>";
        else if ($value > 10 && $value < 18) echo "<p>Ado !</p>";
        else if ($value >= 30 && $value < 40) echo "<p>Alors, la trentaine ?</p>";
        else if ($value == 43) echo "<p>Tu t'apellerais pas Rida, par hasard ?</p>";
        else if ($value < 30 && $value >= 20) echo "<p>La vingtaine !</p>";
    }
    echo "</ul>";

    echo "<p>".print_r(array_keys($age))."</p>"; // affichage des clefs
    echo "<p>".print_r(array_values($age))."</p>"; // affichages des valeurs


    echo "<p>".print_r($age)."</p>"; // affiche le tableau avec + d'info (type, clés, valeurs...)

    $cars = array("Dacia", "BMW", "Toyota"); // création du tableau

    sort($cars); // tri dans l'ordre alphabétique
    echo "<p>".print_r($cars)."</p>"; // affichage

    $numbers=array(4,6,2,22,11); // création du tableau 
    sort($numbers); // tri dans l'ordre croissant
    echo "<p>".print_r($numbers)."</p>"; // affichage

    rsort($numbers); // tri dans l'ordre inverse (décroissant)
    echo "<p>".print_r($numbers)."</p>";

    $os = array("Mac", "NT", "Irix", "Linux"); // tableau des systèmes d'exploitation
 
    if (in_array("Irix", $os)) {
        echo "<p>J'ai Irix</p>";
    }
    if (in_array("mac", $os)) {
        echo "J'ai mac"; // ne s'affiche pas car sensible à la casse
    }

    $array1 = array("color" => "red", 2, 4, "size" => "tall", "yes", 7);
    echo "<p>". print_r($array1)."</p>";

    // Rappel "array_keys": https://www.php.net/manual/fr/function.array-keys.php
    echo "<p>". print_r(array_keys($array1))."</p>";

    $array2 = array("a", "B", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    // tri des données : d'abord les "strings" et ensuite les "integers"
    sort($result);
    echo "<p>". print_r($result)."</p>";

    // LES FONCTIONS :

    writeMsg("Sayah", "El Yatim", 3); // appel de fonction

    /* 1) Modifier la fonction writeMsg() pour qu'elle accepte 
    un troisème argument : l'entier $repetitions. 
    writeMsg() repetera le echo autant de fois que $repetitions
    Exemple : 
    writeMsg("oh", "ah", 3);
    Résultat :
    Hello oh ah!
    Hello oh ah!
    Hello oh ah!
    2) Écrire une fonction paragraph() qui prend en argument une chaîne de caractères
    et qui l'affiche en l'entourant d'une balise <p>
    Exemple : 
    paragraph("Hello");
    <p>Hello</p>
    3) Modifier writeMsg() pour qu'elle appelle la fonction paragraph() afin 
    de renvoyer un résultat correct pour le web
    */

    function writeMsg($firstname, $name, $repetitions) { // definition de fonction
        for($counter = 1; $counter <= $repetitions; $counter++)
            paragraph("Hello ".$firstname." ".$name."!");
    }

    writeMsg("Sayah", "XYZW", 4);


    function paragraph($string) { // je définis la fonction "paragraph"
        echo "<p>".$string."</p>";
    }

    paragraph("Coucou les amis."); // j'apelle ma fonction

    function tag($sentence, $tagname = "p"){
        echo "<".$tagname.">".$sentence."</".$tagname.">";
    }

    tag("bonjour", "p");
    $monSuperMessage = "Je suis un message hyper important.";
    
    // les appels fonctionnent même avec des variables :
    tag($cars[0], "blockquote");
    tag($monSuperMessage, "p");

    function salutation() {
        echo tag("Bonjour bonjour bonjour !");
        echo tag("C'est super d'être ici");
        echo tag("Je suis en train de travailler.");
    };

    salutation();

    // Fonctions avec paramètres par défaut :
    function greetings($nom = "El Yatim", $prenom = "okay") {
        echo tag("Hi " . $nom ." ". $prenom . "!");
    }
    // Test des arguments par défaut
    greetings();
    // Test avec arguments
    greetings("El Yatim", "yes");

    function somme($x, $y) {
        return $x + $y;
    };

   $petroleFrance = somme(789346589, 234525);
   $petroleItalie = somme(85405540, 2847583);

   // calcul de somme de sommes
   echo somme($petroleFrance,  $petroleItalie);
   // même chose que l'appel précédent
   echo somme(
            somme(789346589, 234525),
            somme(85405540, 2847583)
    );

    // La portée des variables
    $nbr = 5;

    function myFunc() {

        echo tag($nbr);
        
    };
    $xyz = 100;

    myFunc();
    echo $xyz;

    /* Exercices :
    1) Écrire une fonction compare(), qui prend deux arguments et compare leur valeur
    (égalité, plus grand ou plus petit que).
    Exemple d'utilisation :
    compare(12, 24);
    12 est plus petit que 24 !
    2) Écrire une fonction jumpsToZero() qui prend comme argument un nombre eniter positif et qui
    affiche e compte d'un nombre sur deux jusqu'à zéro inclus.
    Exemple d'utilisation :
    jumpsToZero(11);
    9
    7
    5
    3
    1
    */
    
alt gr6

        
?>

</body>
</html>