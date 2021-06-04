<?php
    if ($_POST){
        $_POST['lastName'] = addslashes($_POST['lastName']);
        $_POST['firstName'] = addslashes($_POST['firstName']);
        $_POST['email'] = addslashes($_POST['email']);
        $_POST['message'] = addslashes($_POST['message']);
        $bdd->exec("INSERT INTO contact (fa_name, fi_name, email, msg, date) VALUES ('$_POST[lastName]', '$_POST[firstName]', '$_POST[email]', '$_POST[message]', NOW())");
    //NOW récupère la date et l'heure actuelle.
    //Je gère le soucis d'apostrophes :
    }