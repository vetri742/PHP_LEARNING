<?php
    $word="programming";
    $freq=[];
    for($i=0;$i<strlen($word);$i++){
        $curr=$word[$i];
        if(isset($freq[$curr])){
            $freq[$curr]++;

        }
        else{
            $freq[$curr]=1;
        }
    }
    //print_r($freq);
    foreach($freq as $key=>$f ){
        if($f==1){
            $result=$key;
            break;
      }
    // echo $f;
    }
    echo $result
    
?>