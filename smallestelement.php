<?php
     $elements=[12,33,2,434,6,44,11];
     $smallest=$elements[0];
     foreach($elements as $element){
        if($smallest>$element){
            $smallest=$element;
        }

     }
echo $smallest;
?>