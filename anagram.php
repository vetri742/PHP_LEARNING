<?php
$word1="listen";
$word2="silent";
if(strlen($word1)!=strlen($word2)){
    echo "NOT AN ANAGRAM";
    exit;
}
$freq=[];

for($i=0;$i<strlen($word1);$i++){
    $curr=$word1[$i];
    if(isset($freq[$curr])){
        $freq[$curr]++;
    }
    else{
        $freq[$curr]=1;
    }
}
for($j=0;$j<strlen($word2);$j++){
    $current=$word2[$j];
    if(!isset($freq[$current])){
        echo "NOT AN ANAGRAM";
        exit;
    }
    $freq[$current]--;
}
$isanagram=true
foreach($freq as $key=>$value){
    if($value!=0){
        $isanagram=false;
        break;
    }    
}
if($isanagram){
    echo "ANAGRAM";
}
else{
    echo "NOT AN ANAGRAM";
}
?>