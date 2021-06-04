<?php 
  session_start();
  include('../bdd-connect/connect.php');
  include('../components/menu.php');
  if ($_SESSION['role'] == 'admin') { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>Admin</title>
</head>
<body>
    <div class="main admin">
        <h2>Master <?= $_SESSION['user_pseudo']?> welcome !</h2>
    </div>
    <?php
        include('../components/footer.php');
    ?>
    <script src="../scripts/darkmode.js"></script>
</body>
</html>
<?php 
}else {
   header("Location: ../login.php");
}
?>