<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
</head>
<body>
    <h1>Pour s'entrainer un peu :)</h1>
    <?php
// exemple 1
    $cat="pc";
    $prix=1200; 
    $Nprix=0;
    if ($cat=="pc") {
        if($cat=="pc" && $prix<=900){$Nprix=$prix*0.9;
        echo "<p>Vous bénificier d'une réduction de 15% sur tout les ".$cat." à " .$prix."€ le nouveau prix sera de ".$Nprix."€ </p>";
        }elseif ($cat=="pc" && $prix>900){
                $Nprix=$prix*0.85;
                echo"<p> Vous bénificier d'une réduction de 10% sur tout les". $cat."à" .$prix."€ le nouveau prix sera de" .$Nprix."€ </p>";
        }
    }  
    elseif ($cat=="Livres") {
        $Nprix=$prix*0.95;
        echo "<p>Vous bénificier d'une réduction de 5% sur tous les". $cat." le nouveau prix serait de". $Nprix."€ </p>";
    } 
    else {
        $Nprix=$prix*0.98;
        echo "<p>Vous bénificier d'une réduction de 2% sur tous les autres ". $cat." le nouveau prix serait de". $Nprix."€ </p>";
            }
// exemple 2
$cat="Livres";
$prix=35; 
$Nprix=0;
if ($cat=="pc") {
    if($cat=="pc" && $prix<=900){$Nprix=$prix*0.9;
    echo "<p>Vous bénificier d'une réduction de 15% sur tout les ".$cat." à " .$prix."€ le nouveau prix sera de ".$Nprix."€ </p>";
    }elseif ($cat=="pc" && $prix>900){
            $Nprix=$prix*0.85;
            echo"<p> Vous bénificier d'une réduction de 10% sur tout les". $cat."à" .$prix."€ le nouveau prix sera de" .$Nprix."€ </p>";
    }
}  
elseif ($cat=="Livres") {
    $Nprix=$prix*0.95;
    echo "<p>Vous bénificier d'une réduction de 5% sur tous les ". $cat." le nouveau prix serait de". $Nprix."€ </p>";
} 
else {
    $Nprix=$prix*0.98;
    echo "<p>Vous bénificier d'une réduction de 2% sur tous les autres ". $cat." le nouveau prix serait de". $Nprix."€ </p>";
        }




//fonction from scratch qui s'appellent plus petit
    // exemple 1
    $tableau = array(112 , 50 , 85 , 125 , 13 , 78 , 300 );
        function pluspetit($tableau){
            $min = 0;
            for($i =0 ; $i< count($tableau) ; $i++){
                if($tableau[$i] < $tableau[$min]){
                    $min = $i; 
                }
            }
            return $tableau[$min];
        }
        echo"<p>la plus petite valeur du tableau est ".pluspetit($tableau)."</p>";
    // exemple2
    $tableau = array(112 , 50 , 85 , 125 , 13 , 78 , 300 );
            
    function pluspetit2($tableau){
        $min = 0;
        for($i =0 ; $i< count($tableau) ; $i++){
            if($tableau[$i] < $tableau[$min]){
            $min = $i; 
            } 
        }
            echo"<p>la plus petite valeur du tableau est ".$tableau[$min]." cette valeur ce trouve a l'indice ".$min."</p> ";
    }
            pluspetit2($tableau);

// 2.0 Créer une fonction from scratch qui s'appelle listePuceHTML().

    $titre="liste Marché";
    $tableauLegumes=["Aubergine", "Navet", "Courgette", "Oignon","Artichaut"];
    function listePuceHTML($titre,$tableauLegumes){
        if ($titre=="" && $tableauLegumes==0)  return;
                  
        echo"<h2>".$titre."</h2>";
        echo"<ul>";
        for($i = 0 ; $i< 5 ; $i++){
        echo"<li>".$tableauLegumes[$i]."</li>";
        } 

        echo"</ul>";
    }
    listePuceHTML($titre , $tableauLegumes);
    echo"</div>";
/* 2.1 Variante : affichez la liste <ul><li> 
avec les légumes(si on reprend le même exemple ci-dessus)
 mais CLASSÉS dans l'ordre alphabétique*/

 echo"<div>";
    $titre = "liste Marché";
    $tableauLegumes = ["Aubergine", "Navet", "Courgette", "Oignon","Artichaut"];
    function listePuceHTML1($titre , $tableauLegumes){
        if($titre== "" || count($tableauLegumes) == 0) return;
        
            echo"<h2>".$titre."</h2>";
            sort($tableauLegumes);
            echo"<ul>";
            for($i = 0 ; $i< 5 ; $i++){
            echo"<li>".$tableauLegumes[$i]."</li>";
        } 

            echo"</ul>";
    }
    listePuceHTML1($titre , $tableauLegumes);
echo"</div>";

//3.Créer une fonction from scratch qui s'appelle remplacerCertainesLettres(). 
$chaine1 = "Bonjour les amis";
$nouvelle_chaine=str_replace("pl", "m", $chaine1,);
echo"<div>";
        function remplacerCertainesLettres($chaine){
            for($i = 0 ; $i <= 0 ; $i++){
                $chaine =  str_replace("e", 3 , $chaine);
                $chaine = str_replace("i", 1 , $chaine);
                $chaine = str_replace("o", 0 , $chaine);
                echo "<p>".$chaine."</p>";
            } 
        }
        remplacerCertainesLettres("Les cours de programmation Web sont trop cools");
echo"</div>";
?>

</body>
</html>