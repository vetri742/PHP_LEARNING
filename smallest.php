<?php
    $numbers=[15, 8, 27, 4, 19];

    $smallest=$numbers[0];
    
    foreach($numbers as $num){
        if($num<$smallest){
            $smallest=$num;
        }
    }
    echo "{$smallest}";
?>