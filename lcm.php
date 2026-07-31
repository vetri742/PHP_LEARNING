<?php

$a=12;
$b=18;
$lcm=max($a,$b);

while(true){
    if($lcm%$a==0 and $lcm%$b==0){
        echo "The lcm of two numbers is {$lcm}";
        break;
    }
    $lcm++;

}


?>