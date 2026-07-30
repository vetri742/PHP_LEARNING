<?php

    $numbers = [15, 8, 27, 4, 19];

    $largest=0;

    foreach($numbers as $num){
        if($num>$largest){
            $largest=$num;
        }
    }
    echo "{$largest} is the largest number in an array";



?>