<?php
   /* $numbers = [12,33,2,434,6];
    $reversed=[];
    foreach($numbers as $num){
        array_unshift($reversed,$num);
    }
    print_r($reversed);*/
  $numbers = [12,33,2,434,6]; 
  $start=0;
  $end=count($numbers)-1;

  while($start<$end){
    $temp=$numbers[$start];
    $numbers[$start]=$numbers[$end];
    $numbers[$end]=$temp;

    $start++;
    $end--;

  }
  print_r($numbers);


?>
