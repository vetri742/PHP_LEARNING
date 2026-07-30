<?php
//10. Calculate age from a birthdate (YYYY-MM-DD) till today. 
// Input: Birthdate = "1990-05-23" (Assuming today is 2025-05-23) Output: Age: 35 years 
$dob=new DateTime("1990-05-23");

$today=new DateTime();
$age=$dob->diff($today);
echo $age->y;

?>