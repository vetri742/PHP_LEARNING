<?php
    $n=4325;
    $largest=0;
    $second_largest=0;

    while($n>0){
        $last=$n%10;
        if($last>$largest){
            $second_largest=$largest;
            $largest=$last;
        }
        elseif($last>$second_largest){
            $second_largest=$last;

        }
        $n=floor($n/10);
    }
    echo $largest*$second_largest;

    
        

   
  
?>