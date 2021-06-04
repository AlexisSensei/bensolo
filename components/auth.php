<?php
    include('bdd-connect/connect.php'); //connexion a la bdd avec un include
    
    if(isset($_POST['pseudo']) && isset($_POST['pass'])) //vérifications des champs du formulaire
    {
        $pseudo = $_POST['pseudo']; //création variables
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        if(empty($pseudo)){ //si champs pseudo vide
            header("Location: login.php?error=Pseudo manquant");
        }else if(empty($pass)){ //si champs mdpvide
            header("Location: login.php?error=MDP manquant");
        }else{ //si tout ok
            $req = $bdd->prepare("SELECT * FROM users WHERE pseudo=?");
            $req->execute([$pseudo]);

            if($req->rowCount() === 1){ //si $req c'est bien executé
                $user = $req->fetch();
                $user_id = $user['id'];
                $user_pseudo = $user['pseudo'];
                $user_email = $user['email'];
                $user_pass = $user['pass'];
                $user_role = $user['role'];

                if ($pseudo === $user_pseudo){ //si le pseudo entré correspond avec un de la bdd
                    if(password_verify($pass, $user_pass)){ //si le mdp entré correspond avec un de la bdd
                        $_SESSION['user_id'] = $user_id; //création de la session user pour les champs voulus
                        $_SESSION['user_pseudo'] = $user_pseudo;
                        $_SESSION['user_email'] = $user_email;
                        $_SESSION['role'] = $user_role;
                        header("Location: profile.php"); //redirection sur sa page profil
                    }else{ //renvoie des erreurs si une chose ne va pas.
                        header("Location: login.php?error=Pseudo incorrect");
                    }
                }else{
                    header("Location: login.php?error=mdp incorrect");
                }
            }else{
                header("Location: login.php?error=Pseudo incorrect ou mdp");
            }
        }
    }