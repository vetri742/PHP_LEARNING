<?php
$numbers = [1,2,1,3,2,4,5,4];
$seen=[];
foreach($numbers as $num){
    if(isset($seen[$num])){
        echo $num ."<br>";
    }
    $seen[$num]=$num;
    
}
?>