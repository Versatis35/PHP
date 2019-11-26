<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost:3307;dbname=INF2_i183246_PHP;charset=utf8', 'i183246', 'zfv38qg');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

$bdd->query('INSERT INTO ACTIVITE (Nom_ta, Des_ta, Fin_ta, Id_lis) VALUES ("'. $_POST['nom'] .'", "'.$_POST['desc'].'", "'.$_POST['date'].'", "1");');
header ('Location:../Index.php?id=2');
?>