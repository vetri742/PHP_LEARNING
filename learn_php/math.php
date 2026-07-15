<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label >X:</label><br>
        <input type="text" name="x"><br>
        <label >Y:</label><br>
        <input type="text" name="y"><br>
         <label >Z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>

<?php

   $x=$_POST["x"];
   $y=$_POST["y"];
    $z=$_POST["z"];
    

   // echo abs($x);<br> abs() is used to get the absolute value i.e positive one
    echo "MATH FUCNTIONS "."<br>";
    //echo round($x);
   // echo floor($x);
  // echo ceil($x);
  //echo pow($x,$y);
  // echo sqrt($x);
  //echo max($v);
    //echo min($x,$y,$z);



?>