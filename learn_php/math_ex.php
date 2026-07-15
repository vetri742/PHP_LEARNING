<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_ex.php" method="post">
        <label >Radius:</label><br>
        <input type="text"  name="r"><br>
        <input type="submit" value="calculate">
    </form><br>
    
</body>
</html>

<?php
    $radius=$_POST['r'];
    $circumference=null;
    $area=null;
    $volume=null;

    // formula of circumference is 2*pie*r
    $circumference=2*pi()*$radius;

    // formula of area  is pie r square
    $area=pi()*pow($radius,2);

    // formula of volume is 4/3pie r cube
    $volume=4/3*pi()*pow($radius,3);

    

    echo "The circumference of the radius is {$circumference}cm"."<br>";
    echo "The area of radius is {$area}cm^2"."<br>";
    echo "The volume of the radius is {$volume}cm^3<br>";

//echo $_POST['r'];
?>