<?php
function testConnection(){
try
{
    $bdd = new PDO('mysql:host=localhost:3307;dbname=INF2_i183246_PHP;charset=utf8', 'i183246', 'zfv38qg');
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM UTILISATEUR WHERE Id_ut="' . $_POST['nom'] . '" AND Mdp_ut="'.$_POST['mdp'].'";');
if($reponse->rowCount() == 0){
    test(4);
}
while ($donnees = $reponse->fetch())
{
    liste(1);
    session_start();
    $_SESSION["identifiant"] = $_POST["nom"];
}

$reponse->closeCursor();
}
?>