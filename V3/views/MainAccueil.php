<html>
<head>
    <link type="text/css" rel="stylesheet" href="views/MainAccueil.css">
</head>
<body>
<div id="titre">
    <h1>Bienvenue sur TodoMaster</h1>
</div>
<div id="EcranConnexion">
    <form method="post" action="controllers/Test_Connexion.php">
        Vous avez déjà un profil ? Connectez vous :<br/><br/>
        Pseudo : <input type="text" name="nom" size="10"> <br/><br/>
        Mot de Passe : <input type="password" name="mdp" size="10"><br/><br/>
        <input type="submit" value="Se connecter">
    </form>
    <form method="post" action="Index.php?id=1">
        <input type="submit" value="Créer un nouveau profil">
    </form>
</div>
</body>
</html>
