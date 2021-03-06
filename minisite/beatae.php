<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beatea - minisite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/monstyle.css">
</head>
<body>
    <?php $pageEnCours="beatae"; ?>
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
                <h1>Beatea page</h1>
                <p>et voila.</p>
            </section>
        </main>
        <!-- ================== footer ================== -->
        <?php
            include("includes/footer.inc.php");
        ?>
    </div>
</body>
</html>