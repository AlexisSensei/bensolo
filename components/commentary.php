<div class="main space-commentary">
    <h2>Espace Commentaires</h2>
    <form class="comm" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <textarea name="message" placeholder="Ton message Padawan"></textarea>
        <input class="post" type="submit" value="Poster">
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
        $_POST['pseudo'] = addslashes($_POST['pseudo']);
        $_POST['message'] = addslashes($_POST['message']);
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
                <a href="./components/delete.php?id=<?= $l['id']; ?>">SUPPRIMER</a>
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
