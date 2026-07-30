<?php
    $numbers=[12,33,2,434,6,44,11];
    $largest=$numbers[0];
    $second_largest=$numbers[0];
    foreach($numbers as $num){
        if($num>$largest){
            $second_largest=$largest;
            $largest=$num;
        }
        elseif($num>$second_largest){
            $second_largest=$num;
        }
        
    }
    echo $second_largest;

?>