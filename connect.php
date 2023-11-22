<?php
// config
$server = "localhost";
$user = "root";
$password = "";
$DB_name = "brief-6";

$connection = mysqli_connect($server, $user, $password, $DB_name);

if(!$connection){
    die("<h2>Total Fail</h2>" . mysqli_connect_error());
} else{
    echo "connection successfull";
}

?>