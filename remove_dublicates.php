<?php
    $words="programming";
    $removed="";
    for($i=0;$i<strlen($words);$i++){
        $curr=$words[$i];
        if(isset($seen[$curr])){
            continue;
        }
        else{
            $removed=$removed.$words[$i];
            $seen[$curr]=true;
        }
    }
    echo $removed;
?>