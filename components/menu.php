<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../style/style.css">
</head>
<body>
<div id="Menu">
    <div class="SWicon">
        <span class="sabre"></span>
        <span class="sabre"></span>
        <span class="sabre"></span>
    </div>
    <nav id="buttons">
        <?php if(isset($_SESSION['user_pseudo']) && $_SESSION['role'] == 'editeur') { ?>
            <a href="./index.php">Home</a>
            <a href="./presentation.php">Presentation</a>
            <a href="./histoire.php">Story</a>
            <a href="./galerie.php">Gallery</a>
            <a href="./blog.php">Blog</a>
            <a href="./contact.php">Contact</a>
            <a href="./profile.php">Profile</a>
            <button id="colorMode" onclick="dm()">Dark Mode</button>
            <a href="components/logout.php">Sign Out</a>
        <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'admin')  { ?>
            <a href="./blog-admin.php">Blog</a>
            <a href="./contact-admin.php">Contact</a>
            <a href="./admin.php">Admin</a>
            <button id="colorMode" onclick="dm()">Dark Mode</button>
            <a href="../components/logout.php">Sign Out</a>
        <?php } else { ?>
            <a href="./index.php">Home</a>
            <a href="./presentation.php">Presentation</a>
            <a href="./histoire.php">Story</a>
            <a href="./galerie.php">Gallery</a>
            <a href="./blog.php">Blog</a>
            <a href="./contact.php">Contact</a>
            <button id="colorMode" onclick="dm()">Dark Mode</button>
            <a href="./login.php">Login</a>
        <?php } ?>
    </nav>
</div>
</body>
</html>