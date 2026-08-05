<?php
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type");
     header("Access-Control-Allow-Origin: *");
     header("Content-Type:application/json");
     require('../config/db.php');

     $json=file_get_contents("php://input");

     $data=json_decode($json,true);
     
     $title=$data['title'];
     $description=$data['description'];

     $sql="INSERT INTO notes(title,description)
            VALUES( '$title','$description'); ";

     $result=mysqli_query($myconn,$sql);

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