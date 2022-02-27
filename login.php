<?php
$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("Connection error!");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."'AND password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
        {   $_SESSION["USERNAME"]=$username;
            header("location:userhome.php");
        }
    elseif($row["usertype"]=="admin")
        {  $_SESSION["USERNAME"]=$username;
            header("location:adminhome.php");
        }
    else
        {
            echo "Confirm your details!";
        }   
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <main>
        <center>
        <article>
        <h1 style="background-color:#ccc">Login</h1>
        <form action="#" method="POST">
            <div>
                <hr>
                <br>
                <br>
                <br>
                <label>Username:</label><br>
                <input type="text" name="username" required><br>

            </div>
            <div>
                <label>Password:</label><br>
                <input type="password" name="password" required><br>
            </div>
            <div>
                <br>
                <br>
                <input type="submit" value="Login">
            </div>
</form>
        </article>
        </center>




</main>
</body>
</html>