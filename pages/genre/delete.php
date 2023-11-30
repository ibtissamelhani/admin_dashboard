<?php 
include '../../connection/connect.php';
if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];

    $sql="delete from genres where id =$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        header('location:genre.php');
    }
}
?>
