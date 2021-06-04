<!DOCTYPE html>
<html>
    <head>
        <title>Histoire</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head> 
    <body>
        <?php
            include('components/menu.php');
        ?>
        <section class="E-histoire">
            <div class="main contenu-1">
                <img id="comics" src="img/comics_BenSolo.jpeg" alt="origin">
                <p class='histoire'>
                    Ben Solo vit le jour à Hanna City sur Chandrila le jour où le Concordat Galactique fut signé entre la Nouvelle République et l'Empire Galactique mettant ainsi fin à la Guerre Civile Galactique. Cette journée se produisit environ un an après la bataille d'Endor, affrontement au cours duquel ses parents, la Princesse Leia Organa et le Général Han Solo, menèrent les forces de l'Alliance Rebelle vers une victoire décisive sur l'Empire. Cette victoire permit entre autre de débarrasser la galaxie de l'Empereur Sheev Palpatine et du père biologique de Leia Organa, le Seigneur Sith Dark Vador. Alors qu'il se trouvait encore dans le ventre de sa mère, Leia pouvait sentir sa présence grâce à la Force.
                    Son prénom était le surnom du défunt Maître Jedi Obi-Wan Kenobi qui s'appela ainsi lors de son exil sur Tatooine après la chute de l'Ordre Jedi. Pendant sa jeunesse, les parents de Ben eurent tous les deux une vie très active. Han Solo qui avait quitté les rangs de la Rébellion avant la fin de la Guerre Civile Galactique ne restait jamais très longtemps au même endroit. Leia Organa, quant à elle, devint une sénatrice de la Nouvelle République. Le caractère bien entier d'Organa et Solo entrèrent plus d'une fois en conflit. Ces disputes couplées à leurs vies plus que chargées laissèrent le jeune Ben avec un profond sentiment d'abandon...
                </p>
            </div>
            <div class="main contenu-2">
                <p class="KnightsOfRen">Les Chevaliers de Ren incluaient Kylo Ren, que le Suprême Leader Snoke qualifiait de maître des Chevaliers de Ren. En tant que membre des Chevaliers de Ren, Kylo ne faisait pas partie de la hiérarchie officielle du Premier Ordre. Il jouissait ainsi d'une grande liberté d'action au sein du commandement militaire qui devait composer avec sa présence quand leurs objectifs étaient contradictoires. Kylo portait un casque de combat noir argenté basé sur ceux portés par les Chevaliers de Ren. Leur vaisseau était le Night Buzzard, un transport de classe Oubliette modifié.</p>
                <img id="gif" src="img/knights_of_ren.gif" alt="master">
            </div>
            <div class="Films">
                <h2>Apparitions</h2>
                <div class="movies">
                    <img src="img/posterSW7.jpeg">
                    <article class="main resume">
                        <p id="synop">Plus de 30 ans après la bataille d'Endor, qui a vu la chute de l'Empire galactique, la paix et la nouvelle république sont encore fragiles. Les nostalgiques de l'ancien régime, rassemblés sous la bannière du Premier Ordre, tentent de reprendre la main sur la force. A leur tête, le sinistre Kylo Ren lance des attaques pirates aux confins de la galaxie...</p>
                    </article>
                    <button class="Rbutton" onclick="showText()">En Savoir Plus</button>
                </div>
                <div class="movies">
                    <img src="img/posterSW8.jpeg">
                    <article class="main resume">
                        <p id="synop2">Le Premier Ordre étend ses tentacules aux confins de l'univers, poussant la Résistance dans ses retranchements. Il est impossible de se sauver à la vitesse de la lumière avec cet ennemi continuellement aux trousses. Cela n'empêche pas Finn et ses camarades de tenter d'identifier une brèche chez leur adversaire. Pendant ce temps, Rey se trouve toujours sur la planète Ahch-To pour convaincre Luke Skywalker de lui enseigner les rudiments de la Force...</p>
                    </article>
                    <button class="Rbutton" onclick="showText2()">En Savoir Plus</button>
                </div>
                <div class="movies">
                    <img src="img/posterSW9.jpeg">
                    <article class="main resume">
                        <p id="synop3">Un an a passé depuis que Kylo Ren a tué Snoke, le Leader suprême et pris sa place. Bien que largement décimée, la Résistance est prête à renaître de ses cendres. Rey, Poe, Leia et leurs alliés se préparent à reprendre le combat. Mais ils vont devoir faire face à un vieil ennemi : l'empereur Palpatine...</p>
                    </article>
                    <button class="Rbutton" onclick="showText3()">En Savoir Plus</button>
                </div>
            </div>
            <div class="personnages">
                <h2>Personnages liés à Ben</h2> 
            </div>
            <div class="G-M">
                <div class="P">
                    <img src="img/sliderhistoire/Rey.png" alt="Photo de Rey">   
                </div>
                <div class="P">
                    <img src="img/sliderhistoire/Han-Solo.png" alt="Photo de Han">  
                </div>
                <div class="P">
                    <img src="img/sliderhistoire/Leia_Organa.png" alt="Photo de Leia">
                </div>
                <div class="P">
                    <img src="img/sliderhistoire/GeneralHux.png" alt="Photo de Hux">
                </div>
                <div class="P">
                    <img src="img/sliderhistoire/Snoke.png" alt="Photo de Snoke">
                </div>
                <div class="P">
                    <img src="img/sliderhistoire/Palpatine.png" alt="Photo de Palpatine">
                </div>
                <a class="avant" onclick="plusSlides(-1)">&#10094;</a>
                <a class="apres" onclick="plusSlides(1)">&#10095;</a>
            </div>  
        </section>
        <?php
            include('components/footer.php');
        ?>
        <script src="scripts/darkmode.js"></script>
        <script src="scripts/histoire.js"></script>                  
    </body>
</html>     