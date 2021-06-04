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
                <p class="txt">
                    Ben Solo was born in Hanna City on Chandrila on the day the Galactic Concordat was signed between the New Republic and the Galactic Empire, ending the Galactic Civil War. This day came about a year after the Battle of Endor, in which her parents, Princess Leia Organa and General Han Solo, led the Rebel Alliance forces to a decisive victory over the Empire. Among other things, this victory rid the galaxy of Emperor Sheev Palpatine and Leia Organa's biological father, the Sith Lord Darth Vader. While he was still in his mother's womb, Leia could sense his presence through the Force.
                    His first name was the nickname of the late Jedi Master Obi-Wan Kenobi, who was so named during his exile on Tatooine after the fall of the Jedi Order. During his youth, Ben's parents were both very active. Han Solo, who had left the Rebellion before the end of the Galactic Civil War, never stayed in one place for very long. Leia Organa, on the other hand, became a senator in the New Republic. Organa and Solo's strong character came into conflict more than once. These arguments coupled with their busy lives left young Ben with a deep sense of abandonment...
                </p>
            </div>
            <div class="main contenu-2">
                <p class="txt">The Knights of Ren included Kylo Ren, whom Supreme Leader Snoke referred to as the master of the Knights of Ren. As a member of the Knights of Ren, Kylo was not part of the official hierarchy of the First Order. This gave him great freedom of action within the military command, which had to deal with his presence when their goals conflicted. Kylo wore a silver-black battle helmet based on those worn by the Knights of Ren. Their ship was the Night Buzzard, a modified Oubliette-class transport.</p>
                <img id="gif" src="img/knights_of_ren.gif" alt="master">
            </div>
            <div class="Films">
                <h2>Appearances</h2>
                <div class="movies">
                    <img src="img/posterSW7.jpeg">
                    <article class="main resume">
                        <p id="synop">More than 30 years after the Battle of Endor, which saw the fall of the Galactic Empire, peace and the new Republic are still fragile. Nostalgic supporters of the old regime, gathered under the banner of the First Order, are trying to regain control of the force. At their head, the sinister Kylo Ren launches pirate attacks to the farthest reaches of the galaxy...</p>
                    </article>
                    <button class="Rbutton" onclick="showText()">Learn More</button>
                </div>
                <div class="movies">
                    <img src="img/posterSW8.jpeg">
                    <article class="main resume">
                        <p id="synop2">The First Order reaches out to the farthest reaches of the universe, pushing the Resistance to its limits. It's impossible to run away at the speed of light with this enemy constantly on your tail. But that doesn't stop Finn and his comrades from trying to find a way through their adversary. Meanwhile, Rey is still on the planet Ahch-To trying to convince Luke Skywalker to teach her the basics of the Force...</p>
                    </article>
                    <button class="Rbutton" onclick="showText2()">Learn More</button>
                </div>
                <div class="movies">
                    <img src="img/posterSW9.jpeg">
                    <article class="main resume">
                        <p id="synop3">A year has passed since Kylo Ren killed Supreme Leader Snoke and took his place. Though largely decimated, the Resistance is ready to rise from the ashes. Rey, Poe, Leia and their allies prepare to fight again. But they will have to face an old enemy: Emperor Palpatine...</p>
                    </article>
                    <button class="Rbutton" onclick="showText3()">Learn More</button>
                </div>
            </div>
            <div class="personnages">
                <h2>Characters connect to Ben</h2> 
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