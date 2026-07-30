<?php
    $numbers=[12,33,2,434,6,44,11];
    $smallest=$numbers[0];
    $second_smallest=$numbers[0];
    foreach($numbers as $num){
        if($num<$smallest){
            $second_smallest=$smallest;
            $smallest=$num;
        }
        elseif($num<$second_smallest){
            $second_smallest=$num;

        }
    }
    echo $second_smallest;
?>