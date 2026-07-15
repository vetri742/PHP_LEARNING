<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Embedding Demo</title>
</head>
<body>
    <h1>Welcome to my website</h1>

    <p>Today's date is: <?php echo date('Y-m-d'); ?></p>

    <?php 
        $hour = date('H'); 
        if ($hour >=0  and $hour<=10){
            echo "<p style='color: green;'>Good morning!</p>";
        } 
        elseif($hour >=11 and $hour<=4){
            echo "<p style='color: blue;'>Good afternoon</p>";
        }
        else{
            echo "<p style='color:orange;'>Good Evening !</p>";
        }
    ?>
</body>
</html>