<?php

$password='VIRAT123';

$hashed_password=password_hash($password,PASSWORD_DEFAULT);

//echo "{$hashed_password}";

if(password_verify('Virat123',$hashed_password)){
    echo "LOGGED IN SUCCESSFULLY";
}
else{
    echo "INCORRECT PASSWORD";
}


?>