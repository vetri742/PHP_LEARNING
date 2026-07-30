<?php
    $numbers = [12,33,2,434,6,44,11];
    $target = 44;  
    $isfound=false;
    
    foreach($numbers as $index=>$num){
            if($num==$target){
                $isfound=true;
                $position=$index;
                break;
           }

        
    
    }
if($isfound){
    echo "found at"." "."INDEX"." ".$position;
}
else{
    echo "not found";
}

?>