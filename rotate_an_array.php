<?php
$numbers = [1, 2, 3, 4, 5];
$k=2;
//          0  1  2  3  4


for($j=0;$j<$k;$j++){
    $last = $numbers[count($numbers) - 1];
    for($i=count($numbers)-1;$i>=0;$i--){
    if($i>0){
     $numbers[$i]=$numbers[$i-1];
    }
    else{
        $numbers[$i]=$last;
    }
    
}

}


print_r($numbers);
?>