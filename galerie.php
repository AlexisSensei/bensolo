<!DOCTYPE html>
<html>
    <head>
        <title>Galerie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head> 
    <body>
        <?php
            include('components/menu.php');
        ?>
        <div id="myfilters">
            <button class="filter active" onclick="filterSelection('all'
            )"> Show all</button>
            <button class="filter" onclick="filterSelection('seven')"> Episode 7</button>
            <button class="filter" onclick="filterSelection('eight')"> Episode 8</button>
            <button class="filter" onclick="filterSelection('nine')"> Episode 9</button>
        </div>
        <div class="galerie">
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/fightep7kylo.jpeg" alt="Rey Vs Kylo">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren2.jpeg" alt="Kylo en vacances sur jakku">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren7.jpeg" alt="kylo qui lache son meilleur portrait">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren9.jpeg" alt="kylo discute boulot">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo-Ren-and-Darth-Vader.jpeg" alt="Kylo médite avec le casque de DV">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren_viewing_TFA.jpeg" alt="Kylo regarde Starkiller tirer">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren_Lightsaber_TFA.jpeg" alt="Kylo dans une vision">
                </div>
            </div>
            <div class="episode seven">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/rey-kylo.jpeg" alt="Kylo pointe son sabre">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/elevator_scene.jpeg" alt="Ben et Rey <3">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/kylohelmetEP8.png" alt="Ben avec Snoke">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Ren_Helmet_TLJ.jpeg" alt="Ben et son casque">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Snoke_&_Ren.jpeg" alt="Confrontation">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Rey_and_Ren_vs_Guards.png" alt="Rey et Ben ensemble <3">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Young_Ben_Solo_TLJ.jpeg" alt="Ben petit">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/kylo_kill.jpeg" alt="Ben tue un prétorien">
                </div>
            </div>
            <div class="episode eight">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren8.jpeg" alt="Kylo fait des loopings">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/final_battle_exogol.jpeg" alt="*Spoiler*">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/confrontation_kylo.jpeg" alt="Ben retrouve son casque">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Han_&_Ben_TROS.jpeg" alt="Réunion avec son popa">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/kylo_mustafar.jpeg" alt="Ben sur mustafar">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren3.jpeg" alt="Ben sur Pasaana">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren4.jpeg" alt="IS BACK">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/keffbir_battle.jpeg" alt="Duel of the fates">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren6.jpeg" alt="Ben apres un massacre">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren1.jpeg" alt="Rencontre le vieux Monsieur">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/Kylo_Ren5.jpeg" alt="les amoureux se battent">
                </div>
            </div>
            <div class="episode nine">
                <div class="case">
                    <img class="petite" src="img/galerieIMG/TROS_Kylo_Ren_Still.jpeg" alt="Redemption">
                </div>
            </div>
            <div class="fullscreen"></div>
        </div>
        <?php
            include('components/commentary.php');
        ?>
        <?php
            include('components/footer.php');
        ?>
        <script src="scripts/galerie.js"></script>
    </body>
</html>