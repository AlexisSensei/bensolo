<?php 
  include('bdd-connect/connect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            include('components/menu.php');
        ?>
        <section class="contact-page">
            <div class="parallax">
                <img id="img-para" src="img/KnightsOfRen-DB.png" alt="chevaliers de ren">
                <p>Scroll down to have access of the contact form Padawan !</p>
            </div>
            <section class="main formulaire">
                <div class="contact">
                    <h1>Contact us !</h1>
                    <form method="post" class="FormContact">
                        <hr>
                        <div class="Form">
                            <label for="Nom de l'utilisateur">Name :</label>
                            <hr>
                            <input type="text" id="lastName" name="lastName" placeholder="Name">
                            <div id="txtL"></div>
                        </div>
                        <hr>
                        <div class="Form">
                            <label for="Prénom de l'utilisateur">First Name :</label>
                            <hr>
                            <input type="text" id="firstName" name="firstName" placeholder="First Name">
                            <div id="txtF"></div>
                        </div>
                        <hr>
                        <div class="Form">
                            <label for="email">Email : </label>
                            <hr>
                            <input id="email" name="email" placeholder="Em@il">                    
                            <div id="mailerror"></div>
                        </div>
                        <hr>
                        <div class="Form">
                            <label for="message">Message : </label>
                            <hr>
                            <textarea id="message" name="message" placeholder="Your message"></textarea>
                            <div id="txt2"></div>
                        </div>
                        <input id="send" type="submit" value="Send">
                    </form>
                    <?php include('components/contact-request.php');?>
                </div>
            </section>
        </section>
        <?php
            include('components/footer.php');
        ?>
        <script src="scripts/darkmode.js"></script>
        <script src="scripts/contact.js"></script>
    </body>
</html>