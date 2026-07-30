<?php
    $numbers = [1,2,1,3,2,4];
    $new_array=[];
    $seen=[];
    foreach($numbers as $num){
        if(isset($seen[$num])){
            continue;
        }
        else{
            $new_array[]=$num;
            $seen[$num]=true;
        }
    }
    print_r($new_array);
?>