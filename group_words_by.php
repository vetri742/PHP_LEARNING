<?php
    $words = ["apple", "banana", "apricot", "blueberry"]; 
    $result=[];
    
    foreach($words as $word){
        $firstletter=$word[0];

        if(isset($result[$firstletter])){
            array_push($result[$firstletter],$word);
        }
        else{
            $result[$firstletter]=[$word];

        }
    }
    print_r($result);
    
?>