<?php
$numbers=[12,33,2,434,6,44,11];
$count=0;
foreach($numbers as $num){
    if($num%2==0){
        $count++;
    }
}
echo $count;
?>