<?php

try
{
   $bdd = new PDO('mysql:host=localhost:3307;dbname=INF2_i183246_PHP;charset=utf8', 'i183246', 'zfv38qg');
}
catch(Exception $e) {
   die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM UTILISATEUR WHERE Id_ut="' . $_POST['nom'] . '" AND Mdp_u t="'.$_POST['mdp'].'";');
if($reponse->rowCount() == 0){
   header('Location: MainError.php');
}
while ($donnees = $reponse->fetch())
{
   ?>

   <?php
}

$reponse->closeCursor();



?>