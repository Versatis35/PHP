<html>
<head>
    <link type="text/css" rel="stylesheet" href="views/CreationCompte.css">
</head>
<body>
<div id="titre">
    <h1>Création de profil</h1>
</div>
<div id="EcranConnexion">

    <form method="post" action="controllers/CreationCompteExec.php">
        Pseudo  <br/><input type="text" name="nom" size="20" id="nom" oninput="myFunction()"> <br/><br/>
        Mot de Passe  <br/><input type="password" name="mdp" size="20" id="mdp" oninput="myFunction()"><br/><br/>
        Vérification Mot de Passe  <br/><input type="password" name="mdpVerif" size="20" id="mdpVerif" oninput="myFunction()"><br/><br/>
        <input type="submit" value="Créer son profil !" id="buttonSub" disabled="true">
    </form>
    
</div>
</body>
</html>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById('nom').value;
        var y = document.getElementById('mdp').value;
        var z = document.getElementById('mdpVerif').value;
        if ((x.length==0) || (y.length==0) || (z.length==0)) {
            document.getElementById('buttonSub').disabled = true;
        } else {
            document.getElementById('buttonSub').disabled = false;
        }
    }
</script>

