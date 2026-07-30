<?php
$str="pavithra";
$rev="";
for($i=strlen($str)-1;$i>=0;$i--){
    $rev=$rev.$str[$i];
}
echo $rev;

?>