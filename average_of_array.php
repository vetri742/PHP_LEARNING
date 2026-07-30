<?php
$numbers=[12,33,2,434,6,44,11];
$n=count($numbers);
$sum=0;
foreach($numbers as $num){
    $sum+=$num;
}
$average=$sum/$n;
echo $average;
?>