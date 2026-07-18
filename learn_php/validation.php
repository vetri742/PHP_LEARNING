<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
        <label >USERNAME:</label> <br>
        <input type="text" name="username"><br>
          <label >EMAIL:</label> <br>
        <input type="email" name="email"><br>
        <input type="submit" value="SUBMIT" name="btn"><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){
  $username=filter_input(INPUT_POST,
                        'username',
                       FILTER_SANITIZE_SPECIAL_CHARS);
    $email=filter_input(INPUT_POST,
                        'email',
                        FILTER_SANITIZE_EMAIL);
    $valid_email=filter_input(INPUT_POST,
                            'email',FILTER_VALIDATE_EMAIL);
    
    if(empty($_POST['email'])){
        echo "enter valid email";
    }
    else{
        echo "your email is {$email}";
    }
}


?>