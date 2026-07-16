<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the login page</h2>
    <form action="login.php" method="post">
        <label >USERNAME :</label><br>
        <input type="text" name="username" ><br>
        <label >PASSWORD :</label><br>
        <input type="password" name="password" ><br>
        <input type="submit" name="login" value="login"><br>
    </form>
    
</body>
</html>
<?php

    if(isset($_POST['login'])){
        //echo "YOU TRIED TO LOGIN";
        if(!empty($_POST['username'] && !empty($_POST['password']))){
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];

           // echo "{$_SESSION['username']} <br>";
           // echo "{$_SESSION['password']} <br>";
           // echo "YOU LOGGED IN SUCCESSFULLY <br>";
           header("Location: logout.php");


        }
    }


?>