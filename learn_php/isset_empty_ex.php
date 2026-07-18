<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty_ex.php" method="post">
        <label >USERNAME:</label><br>
        <input type="text" name="username"><br>
        <label >PASSWORD:</label><br>
        <input type="password" name="pw"><br>
        <input type="submit" name="btn" value="login"><br>


    </form>
</body>
</html>
<?php
    /*if(empty($_POST['btn'])){
        echo "YOU TRIED TO LOGIN";
    }*/

    if(isset($_POST['btn'])){
        $username=$_POST['username'];
        $password=$_POST['pw'];
        if(empty($username)){
            echo "ENTER USERNAME";

        }
        elseif(empty($password)){
            echo "PASSWORD IS MISSING";
        }
        else{
            echo "hi {$username}";
        }

    }    
?>