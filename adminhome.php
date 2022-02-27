<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADMINHOME</title>
    </head>
    <body>
        <h1>THIS IS THE ADMINS PAGE!</h1>
        <?php echo $_SESSION["USERNAME"]  ?>
        <br>
        <a href="logout.php">LogOut</a>
    </body>
</html>