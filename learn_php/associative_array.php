<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <label >ENTER YOUR COUNTRY:</label><br>
        <input type="text" name="country"><br>
        <input type="submit" value="SUBMIT">
    </form><br>
</body>
</html>

<?php

    $capitals=array("INDIA"=>"NEW DELHI",
                    "PAKISTAN"=>"LAHORE",
                    "AUSTRALIA"=>"MELBOURNE",
                    "NEWZEALAND"=>"AUCKLAND",
                    "ENGLAND"=>"LONDON");

    echo $capitals[ $_POST["country"]];   
?>