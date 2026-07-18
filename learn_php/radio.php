<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" name="team_name" value="RCB" >RCB <br>
        <input type="radio" name="team_name" value="CSK">CSK <br>
        <input type="radio" name="team_name" value="MI">MI<br>
        <input type="submit" value="select" name="btn"><br>
        

    </form>


    
</body>
</html>

<?php

/*$selected_team=$_POST['team_name'];
echo $selected_team;*/

if(isset($_POST['btn'])){

    if(isset($_POST['team_name'])){
        $selected_team=$_POST['team_name'];
        echo "you selected {$selected_team}";
    }
    else{
        echo "PLEASE MAKE A SELECTION";
    }
    //$selected_team=$_POST['team_name'];
    //echo "you selected {$selected_team}";
}



?>