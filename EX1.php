<?php
    $config_user = "admin";
    $config_pass = "totoro";

    if($_POST["nom"] == $config_user && $_POST["mdp"] == $config_pass){
        echo "Bienvenue";
    }
    else {
        echo "Nom ou mot de passe incorect ! ";
    }
?>

