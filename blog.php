<?php
    include('bdd-connect/connect.php');
    include('components/menu.php');
?>
<?php 
    $show = $bdd->prepare("SELECT * FROM articles ORDER BY id DESC"); //sélectionne toute la table de données
    $show->execute();
    $articleList = $show->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>Blog</title>
</head>
<body>
    <?php foreach ($articleList as $l) { ?>
            <div class="main article">
                <p><?= $l['title']?></p>
                <img class="img-article" src="<?= $l['img']?>" alt="sabre">
                <p><?= $l['txt']?></p>
                <hr>
            </div>
        <?php } ?>
    <?php
        include('components/footer.php');
    ?>
    <script src="scripts/blog.js"></script>
    <script src="scripts/darkmode.js"></script>
</body>
</html>