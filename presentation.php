<!DOCTYPE html>
<html>
    
    <head> <!-- partie non visible pour l'utilisateur-->
        <title>Presentation</title>
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
                <p class="txt">Ben Solo, a character played by actor Adam Driver since Star Wars 7: The Force Awakens released in our theaters in December 2015. This character coming straight from the galaxy far, far away that is Star Wars, is today part of one of the most appreciated characters by the fans who have both loved his development as well as the interpretation delivered by the actor. However, his fate decided for the last episode of the saga, Star Wars 9 The Rise of Skywalker, has divided the fans a lot and for most of them, they ask more than anything to have the chance to see him on screen again one day.
                </p>
            </article>
            <!--Frise chronologique-->
            <section class="element"></section>
                <div class="frise">
                    <h1 class="name">Timeline</h1>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>9 AV .IS</h2>
                            <p>Born in Chandrilla</p>
                        </div>
                    </div>
                    <div class="contenu">
                    <div class="main txt">
                            <h2>6 AV .IS</h2>
                            <p>Destroy the Jedi Temple of his Master, Luke Skywalker</p>
                        </div>
                    </div>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>0 AV .IS</h2>
                            <p>Kill his father Han Solo and the Supreme Leader Snoke and become the Leader of the First Order</p>
                        </div>
                    </div>
                    <div class="contenu">
                        <div class="main txt">
                            <h2>1 AP .IS</h2>
                            <p>Discover Exegol and the Emperor Palpatine</p>
                        </div>
                    </div>
                    <div class="main echelle">
                        <p><strong> IS </strong> means "Incident Starkiller", which is the base of Star Wars Timeline</p> 
                    </div>
                <!--Frise chronologique-->                   
                </div>
            <div class="main cruiser">
                <p class="txt">
                    The Finalizer was a Resurgent-class Star Destroyer produced by Kuat-Entralla Engineering for the First Order Navy. Its design was inspired by the Imperial-class star destroyers of the Galactic Empire. It was placed under the command of General Armitage Hux. Captain Phasma and the FN Division were stationed aboard the Finalizer.
                </p>
                <img id="croiseur" src="img/Finalizer.webp" alt="croiseur de Guerre">
            </div>
            <div class="main navette">
                <img id="Shuttle" src="img/KyloRenCommandShuttle.webp" alt="navette de Ben">
                <p class="txt">The command shuttle was Upsilon class and used by Kylo Ren, who was a member of the Knights of Ren and the First Order, about thirty years after the Battle of Endor. His ship led a group of atmospheric assault landers to the Star Destroyer Finalizer.</p>
            </div>
            <div class="endvideo">
                <div class="endcontent">
                    <h3>Teaser Star Wars tros</h3>
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