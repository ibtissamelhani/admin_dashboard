<?php
include '../../dataBase/connect.php';
include '../../Model/adminScript.php';

function add($name,$description){
    global $connection;
    $insert = addCategory($name,$description);
    $result = mysqli_query($connection, $insert);
}
function getAll(){
    global $connection;
    $query = getCategories();
    $result = mysqli_query($connection,$query);
   return $result;

}

function getCategory($id){
    global $connection;
    $sql = selectById('categories',$id);
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function update($id, $name, $description){
    global $connection;
    $query = updatecategory($id, $name, $description);
    $result = mysqli_query($connection, $update);
    return $result;
}





?>