<?php 
session_start();?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
            <title>Profil</title>
        </head>
        <?php include('components/menu.php'); ?>
        <body>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                header("Location: admin/admin.php");
            } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'editeur') { ?>
                <div class="main profile">
                    <h1>Welcome <?= $_SESSION['user_pseudo']?></h1>
                </div>
        </body>
    </html>
<?php
} else 
    {
        header("Location: index.php");
    }   
?>