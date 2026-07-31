<?php

$array1 = [1,2,3,4];
$array2 = [3,4,5,6];

$result = [];
$seen = [];

foreach($array1 as $a1){
    if(isset($seen[$a1])){
        continue;
    }
    $result[]=$a1;
    $seen[$a1]=true;
}
foreach($array2 as $a2){
    if(isset($seen[$a2])){
        continue;
    }
    $result[]=$a2;
    $seen[$a2]=true;
}
print_r($result);
?>