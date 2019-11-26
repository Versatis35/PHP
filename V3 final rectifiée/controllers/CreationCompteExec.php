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

if (preg_match( '# +#', $_POST["nom"])){
    header ('Location:../Index.php?id=3');
} else if ($_POST["mdp"] != $_POST["mdpVerif"]) {
        header ('Location:../Index.php?id=4');
} else {
    $bdd->query('INSERT INTO UTILISATEUR VALUES ("'.$_POST["nom"].'", "'.$_POST["mdp"].'");');
    header("Location: ../Index.php?id=2");
    session_start();
    $_SESSION["identifiant"] = $_POST["nom"];
}
?>