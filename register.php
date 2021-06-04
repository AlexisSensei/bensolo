<?php
    include('components/menu.php');
    include('bdd-connect/connect.php');
    if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_pseudo'])) {  //si le formulaire a été correctement rempli
?>
<?php 
    if($_POST && !empty('pseudo')  && !empty('email') && !empty('pass')){ //si le formulaire a été correctement rempli
        function valid_donnees($donnees){
            $donnees = trim($donnees); //supprime les espaces
            $donnees = stripslashes($donnees); //supprime les antislashes
            $donnees = htmlspecialchars($donnees); //transformer les caractères spéciaux en éléments HTML
            return $donnees;
        }
        $data = [ //insertion des donnees entrees
            'pseudo' => valid_donnees($_POST['pseudo']),
            'email' => valid_donnees($_POST['email']),
            'pass' => valid_donnees($_POST['pass']),
        ];
        // Hachage du mot de passe
        $data['pass'] = password_hash($data['pass'], PASSWORD_BCRYPT);
        $send = $bdd->prepare("INSERT INTO users (pseudo, email, pass) VALUES(:pseudo, :email, :pass)");
        $send->execute($data);
        if($send->rowCount() === 1){
            $user = $send->fetch();
                        
            $user_id = $user['id'];
            $user_pseudo = $user['pseudo'];
            $user_email = $user['email'];
            $user_pass = $user['pass'];
            $user_role = $user_role['role'];
            header("Location: profile.php"); //redirection une fois son compte crée
        }
    }
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>Sign Up</title>
</head>
<body>
    <form class="main signup" method="post">
        <div>registration</div>
        <input type="text" name="pseudo" required maxlength="20" placeholder="Pseudo">
        <br><br>
        <input type="email" name="email" required placeholder="mail">
        <br><br>
        <input type="password" name="pass" required minlength="12" placeholder="Password">
        <br><br>
        <input type="submit" value="Register">
        <p>Already Registered ?<a href="login.php">go here</a></p>
    </form>
    <?php
        include('components/footer.php');
    ?>
    <script src="scripts/darkmode.js"></script>
</body>
</html>
<?php
}else {
   header("Location: profile.php");
}
?>
