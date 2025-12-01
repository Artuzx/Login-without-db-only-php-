<?php
    session_start();
    if (!isset($_SESSION["credenziali"])) {
        $_SESSION["Nome"] = $_POST("Nome");
        $_SESSION["Password"] = $_POST("Password");
    }
    
    if ($_SESSION["Nome"] == "admin"){
        if($_SESSION["Password"] == "admin"){
            ?> 
            <a href = "https://www.youtube.com/watch?v=xvFZjo5PgG0&list=RDxvFZjo5PgG0&start_radio=1&pp=ygUIcmlja3JvbGygBwE%3D"> Benvenuto! </a>
            <?php
        } else {
            ?>
            <h1> Devi crearti un account sul sito </h1>
            <?php
        }
    }
    ?>