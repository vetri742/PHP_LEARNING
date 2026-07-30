<?php
$array1=[2,5,9];
$array2=[1,3,8];
$result=[];

$i=0;
$j=0;

while($i<count($array1) && $j<count($array2)){
    if($array1[$i]<$array2[$j]){
        $result[]=$array1[$i];
        $i++;
    }
    else{
        $result[]=$array2[$j];
        $j++;
    }
}
while($i<count($array1)){
    $result[]=$array1[$i];
    $i++;
}
while($j<count($array2)){
    $result[]=$array2[$j];
    $j++;
}
print_r($result);
?>