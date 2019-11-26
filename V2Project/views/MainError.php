<?php
echo "<script>alert(\"Mot de Passe ou Identifiant incorrect\")</script>";
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="MainAccueil.css">
</head>
<body>
<div id="titre">
    <h1>Bienvenue sur TodoMaster</h1>
</div>
<div id="EcranConnexion">
    <form method="post" action="../controllers/Test_Connexion.php">
        Vous avez déjà un profil ? Connectez vous :<br/><br/>
        Pseudo : <input type="text" name="nom" size="10"> <br/><br/>
        Mot de Passe : <input type="password" name="mdp" size="10"><br/><br/>
        <input type="submit" value="Se connecter">
        <input type="button" value="Créer un nouveau profil" onclick="location.href='CChtml.php';">
    </form>
</div>
<script type="text/javascript">

</script>
</body>
</html>
