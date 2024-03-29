<div class="main space-commentary">
    <h2>Commentary Space</h2>
    <form class="comm" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <textarea name="message" placeholder="Your Message Padawan"></textarea>
        <input class="post" type="submit" value="Post it">
    </form>
    <?php
    //je me connecte à ma base de donnée
    try {
        include('bdd-connect/connect.php');
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    //var_dump($bdd);
    if ($_POST){
        $_POST['commentary'] = str_replace($verif, '****', $_POST['commentary']);
        function valid_donnees($donnees){
            $donnees = trim($donnees); //supprime les espaces
            $donnees = stripslashes($donnees); //supprime les antislashes
            $donnees = htmlspecialchars($donnees); //transformer les caractères spéciaux en éléments HTML
            return $donnees;
        }
        $_POST['pseudo'] = valid_donnees($_POST['pseudo']);
        $_POST['message'] = valid_donnees($_POST['message']);
        $bdd->exec("INSERT INTO commentaries (pseudo, commentary, date) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
        //NOW récupère la date et l'heure actuelle.
        //Je gère le soucis d'apostrophes :
    }
    $display = $bdd->prepare("SELECT * FROM commentaries ORDER BY date DESC"); //sélectionne toute la base de donnée en décroissant
    $display->execute();
    $comList = $display->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach ($comList as $l) { ?>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
            <div class="main com">
                <p>Date : <?= $l['date']; ?></p>
                <p>Name : <?= $l['pseudo'] . '<br>' . 'Msg : ' . $l['commentary']; ?></p>
                <hr>
                <a href="./components/delete.php?id=<?= $l['id']; ?>">DELETE</a>
            </div>
        <?php } elseif (isset($_SESSION['user_pseudo']) && $_SESSION['role'] == 'editeur') { ?> 
            <div class="main com">
                <p>Date : <?= $l['date']; ?></p>
                <p>Name : <?= $l['pseudo'] . '<br>' . 'Msg : ' . $l['commentary']; ?></p>
                <hr>
            </div>
        <?php } ?>
    <?php } ?>
</div>
