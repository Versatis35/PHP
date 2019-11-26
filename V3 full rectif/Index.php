
<?php

define('pagencours', $_SERVER['PHP_SELF'], true);
if(pagencours == "/Index.php") {
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
        case 3:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/CreaCmpteErrorId.php');
            break;
        case 4:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/CreaCmpteErrorMdp.php');
            break;
        case 5:
            ?>
            <script type="text/javascript">
                document.body.innerHTML = '';
            </script>

            <?php
            include('views/MainError.php');
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

