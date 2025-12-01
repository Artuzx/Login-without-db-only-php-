<?php

    session_start();
    if (!isset($_SESSION["Password"])) {
        echo "ciao".$_POST["Nome"];
        $_SESSION["Nome"] = $_POST["Nome"];
        $_SESSION["Password"] = $_POST["Password"];
    }
    var_dump($_SESSION);
    if ($_SESSION["Nome"] == "admin" && $_SESSION["Password"] == "admin") {
        echo '<a href="https://www.youtube.com/watch?v=xvFZjo5PgG0&list=RDxvFZjo5PgG0&start_radio=1&pp=ygUIcmlja3JvbGygBwE%3D">Benvenuto!</a>';
    } else {
        echo "<h1>Devi crearti un account sul sito</h1>";
    }
    ?>