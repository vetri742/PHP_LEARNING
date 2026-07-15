<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="order.php" method="post">
        <label for="quantity">QUANITY</label><br>
        <input type="number" id="quantity" name="quantity"><br>
        <input type="submit" value="Place order"><br>
    </form>
    
</body>
</html>
<?php
    $item="Tea";
    $price=12;
    $quantity=$_POST["quantity"];
    $total=$quantity * $price;

    echo "Price of your order is {$total}";


?>