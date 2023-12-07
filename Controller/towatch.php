<?php
include '../dataBase/connect.php';
include '../Model/userScript.php';
$movie_id=$_GET['movieId'];
$user_id=$_GET['userId'];


function addWatch($user_id, $movie_id){
    echo "hello";
    global $connection;
    echo "here";
    $query = addToWatch($user_id,$movie_id);
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "error";
    }else{
        header('location: ../home.php');
    }
}
addWatch($user_id, $movie_id);
?>