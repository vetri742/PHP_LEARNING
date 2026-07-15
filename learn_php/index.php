<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pw">Password</label><br>
        <input type="password" id="pw" name="password"><br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>

<?php
    echo "Hi"." ".$_POST["username"]."<br>";
    echo $_POST["password"]."<br>";
?>

<!-- $_POST IS A SUPERGLOBAL WHICH IS USED TO GET AND STORE DATA FROM A BROWSER TO OUR LOCAL PHP FILE->
