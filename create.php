<?php
     header("Access-Control-Allow-Origin: http://localhost:5173");
     header("Content-Type:application/json");
     require('../config/db.php');

     $json=file_get_contents("php://input");

     $data=json_decode($json,true);
     
     $title=$data['title'];
     $description=$data['description'];

     $sql="INSERT INTO notes(title,description)
            VALUES($title,$description); ";

     $result=mysqli_query($conn,$sql);

     if($result){
        $id=mysqli_insert_id($myconn);
        echo json_encode([
            "id"=>$id,
            "title"=>$title,
            "description"=>$description
        ]);
     }
     else{
        echo json_encode([
            "success"=> false,
            "message"=>"failed to insert one row"
        ]);
     }

?>