<?php 
/*

Write a program to check whether a given number is an Armstrong number or not.

Example 1
Input:
153

*/

$num=153;
$original=$num;
$armstrong=0;
while($num>0){
    $lastdigit=$num%10;
    $armstrong=$armstrong+pow($lastdigit,3);
    $num=floor($num/10);

}
if($armstrong==$original){
    echo "the given num is armstrong";
}
else{
    echo "the given num is not an armstrong";
}




?>

