<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

$servarname = "localhost";
$username = "root";
$password = "";
$database ="ec";



// Try connecting to the Database
$conn = mysqli_connect($servarname, $username, $password, $database);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>

