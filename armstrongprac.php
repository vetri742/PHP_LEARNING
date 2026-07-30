<?php
    $input=153;
    //$armstrong=0; 
    //$original=$input;  
   /* while($input>0){
        $last=$input%10;
        $armstrong=$armstrong+ pow($last,3);
        $input=floor($input/10);

    }
    if($armstrong==$original){
        echo "Given num is armstrog";
    }
    else{
        echo "Given num is not a armstrong";
    }*/
    $reverse=0;
    while($input>0){
        $last=$input%10;
        $reverse=$reverse*10+$last;
        $input=floor($input/10);
    }
    
    echo $reverse;

?>