<!DOCTYPE html>
<html>
<body>

<h1>Exercice 1 de PHP </h1>

<h2>Exemple PHP a)</h2>
<?php
  echo "Hello World!";
?>

<h2>Exemple PHP b)</h2>
<?php
  $texteduParagraphe = "Hello word!";
  $entier = 7;
  $decimal = 10.5;
  $x=3;
  $Y=4;
  $Z=$x + $decimal;
  echo $Z;

  define("vitesse_max"  , 300000);
  define ("AGE_LIMITE", 14);

  // echo $texteduParagraphe;
  // echo $entier;
  // echo $decimal;

  // echo $vitesse_max; est une erreur car ce n'est pas une variable mais une constante
  echo Vitesse_max;
  echo" ";
  echo constant ("vitesse_max");

  
?>

</body>
</html>