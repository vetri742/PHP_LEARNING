<?php
//$year=1340;
function checkleapyear($year){
    if($year%400==0){
        return "Leap year";
    }
    elseif($year%100==0){
        return "Not a leap year";

    }
    elseif($year%4==0){
        return "Leap year";
    }
    else{
        return "Not a leap year";
    }
}
echo checkleapyear(1390);

?>