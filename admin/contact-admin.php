<?php 
    include('../bdd-connect/connect.php');
    include('../components/menu.php'); ?>
    
<?php if ($_SESSION['role'] == 'admin') { ?>
    <?php 
            $show = $bdd->prepare("SELECT * FROM contact ORDER BY date DESC"); //sélectionne toute la table de données
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
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
            <title>Contact</title>
        </head>
        <body>
            <div class="main admin-request">
                <h2>Request</h2>
                <?php foreach ($contactList as $l) { ?>
                    <div class="request">
                        <p><?= $l['fi_name'] . " " . $l['fa_name']; ?></p>
                        <p><?= $l['email'] . '<br>' . 'Msg : ' . $l['msg']; ?></p>
                        <a href="../components/delete-request.php?id=<?= $l['id']; ?>">DELETE</a>
                        <hr>
                    </div>
                <?php } ?>
            </div>
            <script src="../scripts/darkmode.js"></script>
            <script src="../scripts/home.js"></script>
        </body>
    </html>
<?php 
}else {
   header("Location: ../login.php");
}
?>