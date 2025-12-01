<?php
session_start();
?>
<html>
    <body>
        <form action = "dashboard.php" method = "POST">
            <label for = "Nome"> Nome utente </label> <br>
            <input type = "text" id = "Nome" name = "Nome"> <br>

            <label for = "Password"> Password </label> <br>
            <input type = "text" id = "Password" name = "Password"> <br>
            <button type = "submit"> Log in </button>
        </form>
    </body>
</html>