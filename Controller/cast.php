<?php
include '../../dataBase/connect.php';
include '../../Model/adminScript.php';

function add(){
    global $connection;
    $f_name= $_POST['f_name'];
    $l_name= $_POST['l_name'];
    $age=$_POST['age'];
    $sql=addCast($f_name,$l_name,$age);
    $result = mysqli_query($connection, $sql);
}

function selectAll(){
    global $connection;
    $query = getCast();
    $result = mysqli_query($connection,$query);
    return $result;

}

?>