<?php 
    include('../bdd-connect/connect.php');
    include('../components/menu.php'); ?>
    
<?php if ($_SESSION['role'] == 'admin') { ?>
    <?php 
            $show = $bdd->prepare("SELECT * FROM contact ORDER BY date DESC"); //sélectionne toute la table de données dans l'ordre décroissant
            $show->execute();
            $contactList = $show->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/style.css">
            <title>Contact</title>
        </head>
        <body>
            <div class="main admin-request">
                <h3>Request</h3>
                <?php foreach ($contactList as $l) { ?>
                    <div class="request">
                        <p><?= $l['fi_name'] . " " . $l['fa_name'] . '<hr>'; ?></p>
                        <p><?= $l['email'] . '<br>' . 'Msg : ' . $l['msg']; ?></p>
                        <hr>
                        <a href="../components/delete-request.php?id=<?= $l['id']; ?>">SUPPRIMER</a>
                    </div>
                <?php } ?>
            </div>
            <script src="../scripts/darkmode.js"></script>
        </body>
    </html>
<?php 
}else {
   header("Location: ../login.php");
}
?>