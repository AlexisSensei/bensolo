<?php 
  include('../bdd-connect/connect.php');
  include('../components/menu.php');

  if ($_SESSION['role'] == 'admin') { 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css"> <!--intégration du CSS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        ?>
        <form enctype="multipart/form-data" class="main blog" method="post">
        <div>Write an Article</div>
        <br><br>
        <input type="text" name="title" required maxlength="20" placeholder="title">
        <br><br>
        <input type="file" name="img" required placeholder="insert your img here">
        <br><br>
        <textarea type="content" placeholder="your text"></textarea>
        <br><br>
        <input type="submit" value="Send">
    </form>
        <?php
            include('../components/footer.php');
        ?>
        <script class="scripts/darkmode.js"></script>
        <script src="scripts/blog.js"></script>
    </body>
</html>
<?php 
}else {
   header("Location: index.php");
}
?>