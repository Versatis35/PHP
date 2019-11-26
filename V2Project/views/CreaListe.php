

<html>
<head>
    <link type="text/css" rel="stylesheet" href="CreaListe.css">
    <title>TodoMaster</title>
</head>
<body>

<div class="container">
    <div class="item header">
        <div id="titre">
            <h1>TodoMaster</h1>
        </div>
        <div id="logOut">
            <input type="submit" value="Se déconnecter" onclick="disconnect()">
        </div>
    </div>

    <div class="item nav">
        <?php
        function disconnect() {
            session_destroy();

        }
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

        $sqlEgal = $bdd->query('SELECT * FROM LISTE;');

        while($donnee = $sqlEgal->fetch()) {
            echo "<p class='list'>";
            echo "<input type=\"button\" onclick='afficheListe()' value='".$donnee['Nom_lis']."''/>";
            echo "</p> <br/>";
        }

        ?>
        <br/>
        <p><form method="POST" action="../controllers/CreaListeExec.php">
            Nom  <br/><input type="text" name="nom" size="20" id="nom" oninput="myFunction()"> <br/><br/>
            Description  <br/><input type="text" name="desc" size="20" id="desc" oninput="myFunction()"><br/><br/>
            Date de Fin  <br/><input type="text" name="date" size="20" id="date" oninput="myFunction()"><br/><br/>
            <input type="submit" value="Créer tâche" id="buttonSub" ></form>
        </p>
    </div>

    <div class="item main" methode="show" action="afficheListe">
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

        $sqlEgal = $bdd->query('SELECT * FROM ACTIVITE WHERE Id_lis="1";');

        while($donnee = $sqlEgal->fetch()) {
            echo "&nbsp&nbsp-&nbsp&nbsp".$donnee['Nom_ta']."<br/><br/>";
        }

        ?>
    </div>

    <div class="item footer">
    </div>
    
</div>
</body>
</html>


<script type="text/javascript">

    function myFunction() {
        var x = document.getElementById('nom').value;
        var y = document.getElementById('desc').value;
        var z = document.getElementById('date').value;
        if ((x.length==0) || (y.length==0) || (z.length==0)) {
            document.getElementById('buttonSub').disabled = true;
        } else {
            document.getElementById('buttonSub').disabled = false;
        }
    }

    var xhr = null;

    if(window.XMLHttpRequest || window.ActiveXObject){
        if(window.ActiveXObject){
            try{
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }catch(e){
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }else{
            xhr = new XMLHttpRequest();
        }
    }else{
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
    }
</script>