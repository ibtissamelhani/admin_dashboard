<?php 
include '../../dataBase/connect.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];

    $sql="delete from categories where id =$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        header('location:genre.php');
    }
}
?>
