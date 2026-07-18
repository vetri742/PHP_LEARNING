<?php
    // isset() -> returns true if a variable is declared and NOT NULL;
    // empty() -> returns true if a variabla is not declared and  NULL;

    /*$variable=false;

    //echo isset($variable);
    if(isset($variable)){
        echo "THE VARIABLE IS SET";
    }
    else{
        echo 'THE VARIABLE IS NOT SET';
    }*/
    $a=null;

    if(empty($a)){
        echo "VARIABLE is empty";
    }
    else{
        echo "VARIABLE is not empty";
    }
    ?>