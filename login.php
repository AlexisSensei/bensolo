<?php
  include('components/menu.php');
  include('components/auth.php');
  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_pseudo'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> <!--intégration du CSS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>Login</title>
</head>
<body>
    <form class="main login" method="post">
        <h2>Connexion</h2>
        <?php if (isset($_GET['error'])) { ?>
	  	<div class="alert" role="alert">
			<?=htmlspecialchars($_GET['error']);?>
		</div>
        <?php } ?>
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" value="Connect">
        <p>Not Registered yet ?<a href="register.php">go here</a></p>
    </form>
    <?php
        include('components/footer.php');
    ?>
    <script src="scripts/darkmode.js"></script>
    <script src="scripts/home.js"></script>
</body>
</html>
<?php 
}else {
   header("Location: profile.php");
}
?>