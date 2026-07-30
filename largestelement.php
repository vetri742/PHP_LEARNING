<?php
    $elements=[12,33,2,434,6,44,11];
    $largest=0;
    foreach($elements as $element){
        if($element>$largest){
            $largest=$element;
        }
    }
    echo $largest;
?>