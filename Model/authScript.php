<?php
include '../../dataBase/connect.php';

function addUser($first_name, $last_name,$email, $password){
global $connection;
$query = "insert into users (first_name, last_name, email, password) values (?,?,?,?)" ;
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt,"ssss",$first_name,$last_name,$email,$password);
$result = mysqli_stmt_execute($stmt);
return $result;
}

function verifyEmail($email){
    global $connection;
    $query = "select * from users where email=?";
    $stmt = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
?>

