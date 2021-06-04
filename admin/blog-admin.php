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
        <form enctype="multipart/form-data" class="main blog" method="post">
            <h2>Write an Article</h2>
            <input type="text" name="title" required maxlength="20" placeholder="title">
            <input type="file" name="img" required>
            <textarea type="content" name="article" required placeholder="your text"></textarea>
            <input type="submit" value="Send">
        </form>
        <?php if($_POST){
            $nimg = $_FILES['img']['name'];
            $imgtemp = $_FILES['img']['tmp_name'];
            $file = '../img/upload/' . $nimg;
            move_uploaded_file($imgtemp, $file); //copie de l’image ordi vers serveur
            $data = [ //insertion des donnees entrees
                'title' => addslashes($_POST['title']),
                'img' => $file,
                'txt' => addslashes($_POST['article'])
            ]; 
            $send = $bdd->prepare("INSERT INTO articles (title, img, txt) VALUES (:title, :img, :txt)");
            $send->execute($data);
        }?>
        <?php
            include('../components/footer.php');
        ?>
        <script class="../scripts/darkmode.js"></script>
        <script src="../scripts/blog.js"></script>
    </body>
</html>
<?php 
}else {
   header("Location: index.php");
}
?>