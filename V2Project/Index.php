
<?php

define('pagencours', $_SERVER['PHP_SELF'], true);
if(pagencours == "/~i183246/Projet/V2Project/Index.php") {
    include('views/MainAccueil.php');
}

$te = $_GET['id'];
    switch($te) {
        case 1:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/CreaCmpte.php');
            break;
        case 2:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/CreaListe.php');
            break;
        default:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/MainAccueil.php');
            break;

    }

    ?>

