<?php
    echo "<script>alert(\"L'identifiant contient des espaces !\")</script>";
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="CreationCompte.css">
</head>
<body>
<div id="titre">
    <h1>Création de profil</h1>
</div>
<div id="EcranConnexion">

    <form method="post" action="CreationCompte.php">
        Pseudo  <br/><input type="text" name="nom" size="20"> <br/><br/>
        Mot de Passe  <br/><input type="text" name="mdp" size="20"><br/><br/>
        Vérification Mot de Passe  <br/><input type="text" name="mdpVerif" size="20"><br/><br/>
        <input type="submit" value="Créer son profil !" id="buttonSub">
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