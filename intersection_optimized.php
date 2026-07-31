<?php
$array1 = [1,2,3,4];
$array2 = [3,4,5,6];

$result=[];
$seen=[];

foreach($array1 as $a1){
    $seen[$a1]=true;
}

foreach($array2 as $a2){
    if(isset($seen[$a2])){
        $result[]=$a2;
    }
}

print_r($result);
?>