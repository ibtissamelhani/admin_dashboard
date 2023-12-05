<?php 
include '../../dataBase/connect.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];

    $sql="DELETE from movies where id =$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        header('location: film.php');
    }
}
?>