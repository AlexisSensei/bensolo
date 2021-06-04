<?php 
  include('../bdd-connect/connect.php');
  include('../components/menu.php');
  if ($_SESSION['role'] == 'admin') { ?>
<?php 
    $users = $bdd->prepare("SELECT * FROM users ORDER BY 'id'");
    $users->execute();
    $userList = $users->fetchAll(PDO::FETCH_ASSOC);
?>
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
    <div class="main interface">
        <h2>Master <?= $_SESSION['user_pseudo']?> welcome !</h2>
        <?php foreach ($userList as $u) { ?>
        <div class="user">
            <h4>USER</h4>
            <p>id :<?= $u['id'] ." ". "Pseudo :" . $u['pseudo']; ?></p>
            <p><?= $u['email'] . '<br>' . 'Role : ' . $u['role']; ?></p>
            <button id="delete"><a href="../components/delete-user.php?id=<?= $u['id']; ?>">DELETE</a></button>
        </div>
    <?php } ?>
    </div>
    <?php
        include('../components/footer.php');
    ?>
    <script src="../scripts/home.js"></script>
    <script src="../scripts/darkmode.js"></script>
</body>
</html>
<?php 
}else {
   header("Location: ../login.php");
}
?>