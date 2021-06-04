<!DOCTYPE html>
<html>
    
    <head> <!-- partie non visible pour l'utilisateur-->
        <title>Présentation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head>   

    <body> <!--partie visible pour l'utilisateur-->
        <?php
            include('components/menu.php');
        ?>
        <!--Contenu de la page-->
        <section class="element">
            <article class="main">
                <video autoplay loop muted id="PRES">
                    <source src="img/ben_solo_vid.mp4">
                </video>
                <p>Ben Solo, personnage interprété par l’acteur Adam Driver depuis Star Wars 7 : The Force Awakens sorti dans nos salles en décembre 2015. Ce personnage nous venant tout droit de la galaxie lointaine, très lointaine qui est Star Wars, fait aujourd’hui parti d’un des personnages le plus apprécié par les fans qui ont à la fois adorer son développement ainsi que l’interprétation délivré par l’acteur. Toutefois, son sort décidé pour le dernier épisode de la saga, Star Wars 9 The Rise of Skywalker, a beaucoup divisé les fans et pour la plupart d’entre eux, ils demandent plus que tout de pouvoir avoir la chance de le revoir à l’écran un jour.</p>
            </article>
            <!--Frise chronologique-->
            <section class="element"></section>
                <div class="frise">
                    <h1 class="name">Frise Chronologique</h1>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>9 AV .IS</h2>
                            <p>Naissance sur Chandrilla</p>
                        </div>
                    </div>
                    <div class="contenu">
                    <div class="main txt">
                            <h2>6 AV .IS</h2>
                            <p>Détruit le temple Jedi de son maître Luke Skywalker</p>
                        </div>
                    </div>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>0 AV .IS</h2>
                            <p>Tue son père Han Solo et Tue Snoke et devient le Suprème Leader du Premier Ordre</p>
                        </div>
                    </div>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>1 AP .IS</h2>
                            <p>Découvre Exegol et l'Empereur Palpatine</p>
                        </div>
                    </div>
                    <div class="main echelle">
                        <p><strong> IS </strong> signifie "Incident Starkiller", qui est la nouvelle base pour la timeline</p> 
                    </div>
                <!--Frise chronologique-->                   
                </div>
            <div class="main cruiser">
                <p class="explications">Le Finalizer était un Destroyer Stellaire de classe Resurgent produit par l'Ingénierie Kuat-Entralla pour le compte de la Marine du Premier Ordre. Sa conception était inspirée des Destroyers Stellaires de classe Impérial de l'Empire Galactique.
                    Il était placé sous le commandement du Général Armitage Hux. Le Capitaine Phasma et la Division FN étaient stationnées à bord du Finalizer.
                    </p>
                <img id="croiseur" src="img/Finalizer.webp" alt="croiseur de Guerre">
            </div>
            <div class="main navette">
                <img id="Shuttle" src="img/KyloRenCommandShuttle.webp" alt="navette de Ben">
                <p class="shuttle">La navette de commandement était classe Upsilon et utilisée par Kylo Ren, qui était membre des Chevaliers de Ren et du Premier Ordre, environ trente ans après la bataille d'Endor. Son vaisseau a conduit un groupe d'atterrisseurs d'assaut atmosphérique vers le Star Destroyer Finalizer.</p>
            </div>
            <div class="endvideo">
                <div class="endcontent">
                    <h3>Teaser Star Wars tros   </h3>
                </div>   
                <div class="endcontent">
                    <iframe id="teaser" width="780" height="460" src="https://www.youtube.com/embed/o4k12QPAh_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
                </div>
            </div>
        </section>
        <?php
            include('components/footer.php');
        ?>
        <!--Fin Contenu de la page-->
        <script src="scripts/darkmode.js"></script>
        <script src="scripts/presentation.js"></script>
    </body>
</html>