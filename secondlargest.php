<?php
$numbers = [15, 8, 27, 4, 19];
$largest=0;
$secondlargest=0;
foreach($numbers as $num){
    if($num>$largest){
        $secondlargest=$largest;
        $largest=$num;
    }
    elseif($num>$secondlargest){
        $secondlargest=$num;
    
    }

}
echo $secondlargest;
?>