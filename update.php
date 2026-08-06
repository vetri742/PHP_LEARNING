<?php
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type");
     header("Access-Control-Allow-Origin: *");
     header("Content-Type:application/json");
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
    exit();
}
     require('../config/db.php');
     $json=file_get_contents("php://input");

     $data=json_decode($json,true);

     $id=$data['id'];
     $title=$data['title'];
     $description=$data['description'];

     $sql="UPDATE notes
          SET 
          title='$title',
          description='$description'
          WHERE id='$id';";

    $result=mysqli_query($myconn,$sql);

    if($result){
        echo json_encode(
                [
                    "success"=>true
                ]

        );
    }
    else{
        echo json_encode(
            [
                "success"=>false,
                "message"=>"Updation failed"
            ]
        );
    }

?>