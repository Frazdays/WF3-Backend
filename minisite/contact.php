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
    <?php $pageEnCours="contact"; ?>
    <div class="container-fluid">
        <!-- ================== header ================== -->
        <?php
            include("includes/header.inc.php");
        ?>
        <!-- ================== navigation ================== -->
        <?php
            include("includes/navigation.inc.php");
        ?>
        <!-- ================== main ================== -->
        <main>
            <section>
                <h1>Contactez-nous</h1>
                <p>Veuillez remplir le formulaire de contact ci-dessous... É À à</p>
                <?php
                    $nom="migliore";
                    $prenom="christian";
                    echo "<h2>Bonjour ".$prenom." ".$nom.", ça va ?</h2>";
                ?>
                <p>Entités HTML ? &Eacute; &euro; &nbsp; &pi; Les 3 entités HTML à connaitre :</p>
                <p>En HTML, pour faire un titre j'utilise la balise &lt;h1&gt; par exemple. Facile non ?</p>
                <p>Pour taper une esperluette : &amp;amp; (amp pour "ampersand" / "esperluette")</p>
                <p>Un lien : <a href="beatae.php?nom=Lazreg&amp;prenom=Sophia&amp;age=22&amp;taille=178">Dis bonjour</a></p>
                <!--en fait, PHP fait ceci sans vous le dire :  $_GET=["nom"=>"Lazreg", "prenom"=>"Sophia", "age"=22, "taille"=178]   -->

                <!-- CREATION D'UN FORMULAIRE -->
                <!-- la balise form permet de créer un formulaire.
                Elle a 2 attributs : 
                    - action qui permet d'indiquer la page sur laquelle on se dirige lors du clic sur "envoyer"
                    - method qui permet de choisir comment les données seront envoyées (GET ou POST)
                    (si vous laissez la valeur de l'attribute method vide, par défaut se sera GET qui sera pris)
                -->
                <form action="traitement.php" method="GET">
                    <!-- ici tout le formulaire -->
                    <!-- label permet juste d'indiquer ce que vous voulez dans le champ suivant -->
                    <!-- et input qui permet de créer le champ de texte -->
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                    <!-- les attributs (indispensables) de input sont type et name 
                        - type permet de spécifier le type de donnée attendue 
                        - name permet de définir la clé que l'on utilisera dans la page traitement.php ($_GET["nom"]) 
                        - id (permet de lier avec le for du label)
                        ...
                    --> 
                    <!-- bouton d'envoi du formulaire (doit être dans la <form> pour rappel) -->
                    <!-- c'est une balise input, dont le type est submit. L'attribut value est facultatif : il permet de personnaliser le texte du bouton. Si vous n'en mettez pas ce sera "Envoyer". -->
                    <!-- -->
                    <input type="submit" value="envoyer le formulaire">
                </form>
            </section>
        </main>
        <!-- ================== footer ================== -->
        <?php
            include("includes/footer.inc.php");
        ?>
    </div>
</body>
</html>