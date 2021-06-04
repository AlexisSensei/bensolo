<!DOCTYPE html>
<html>
    <!-- Ben Solo le best aka le Supreme Leader -->
    <head> <!-- partie non visible pour l'utilisateur-->
        <title>Acceuil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head>   
        <body class="accueil"> <!--partie visible pour l'utilisateur-->
            <?php
                include('components/menu.php');
            ?>
            <?php if(isset($_SESSION['user_pseudo'])) { ?>
                <header class="headt">
                    <h1>Ben Solo</h1>
                    <h5>Welcome <?= $_SESSION['user_pseudo']?></h5>
                </header>
                <video autoplay muted loop id="BenSoloVid">
                    <source src="img/BenSolo.mp4" type="video/mp4">
                </video>
            <?php } else { ?>
                <header class="headt">
                <h1>Ben Solo</h1>
                <h5>welcome young Padawan !</h5>
                </header>
                <video autoplay muted loop id="BenSoloVid">
                    <source src="img/BenSolo.mp4" type="video/mp4">
                </video>
            <?php } ?>
            <?php
                include('components/footer.php');
            ?>
            <script src="scripts/home.js"></script>
            <script class="scripts/darkmode.js"></script>
        </body>
</html>