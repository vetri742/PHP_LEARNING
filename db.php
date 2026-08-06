<?php
try{
$myconn=mysqli_connect("localhost","root","","notes_app");

}
catch(mysqli_connect_exception){
    echo "<strong>Database connection error</strong>";
}

?>