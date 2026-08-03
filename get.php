<?php
    require('../config/db.php');

    $mysql="SELECT * FROM notes;";
    $result=mysqli_query($myconn,$mysql);

    $notes=[];

    while($row=mysqli_fetch_assoc($result)){
        $notes[]=$row;
    }
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Content-Type:application/json");

     echo json_encode($notes)

    //print_r($notes);



?>