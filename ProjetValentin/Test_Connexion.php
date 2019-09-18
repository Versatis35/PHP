<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host="localhost";port=3307;dbname="INF2_i183246_PHP";charset=utf8', 'i183246@localhost', 'zfv38qg');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM UTILISATEUR');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <?php echo $donnees['Id_ut']; ?><br />
        <?php echo $donnees['Mdp_ut']; ?>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>