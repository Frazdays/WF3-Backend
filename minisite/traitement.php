<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact - minisite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/monstyle.css">
</head>
<body>
    <div class="container-fluid">
        <!-- ================== header ================== -->
        <?php include("includes/header.inc.php"); ?>
        <!-- ================== navigation ================== -->
        <?php include("includes/navigation.inc.php");?>
        <!-- ================== main ================== -->
        <main>
            <section>
                <h1>Traitement.php</h1>
                <p>Infos bien reçues, merci !</p>
                <?php
                    $nameUser=$_GET["nom"];
                    $prenomUser=$_GET["prenom"];
                    $email=$_GET["email"];
                    $sexe=$_GET["civilite"];
                    $villeNaiss=$_GET["villeNaiss"];
                    $message=$_GET["message"];
                    // ajout de $nameUser dans la base de donnée si besoin
                    echo "<p>Bonjour, vous vous appelez : ".$nameUser." ".$prenomUser.", Enchanté.</p>";
                    echo "<p>votre mail est : ".$email.".</p>";
                    echo "<p>Vous êtes un ".$sexe.".</p>";
                    echo "<p>Vous êtes né à ".$villeNaiss.".</p>";
                    echo "<p>Votre message :</p>";
                    echo $message."</p>";
                ?>
            </section>
        </main>
        <!-- ================== footer ================== -->
        <?php include("includes/footer.inc.php");?>
    </div>
</body>
</html>