<?php
$numbers = [0,1,0,3,12];
$position=0;
for($i=0;$i<count($numbers);$i++){
    if($numbers[$i]!=0){
        $numbers[$position]=$numbers[$i];
        $position++;
    }
}
//echo $position . "<br>";
while($position<count($numbers)){
    $numbers[$position]=0;
    $position++;
}
print_r($numbers);
?>