<?php
include '../dataBase/connect.php';
include '../Model/userScript.php';
$movie_id=$_GET['movieId'];
$user_id=$_GET['userId'];

function addFavorie($user_id, $movie_id){
    global $connection;
    $query = addToFavorite($user_id,$movie_id);
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "error";
    }else{
        echo "done";
        header('location: ../home.php');
    }
}
addFavorie($user_id, $movie_id);


?>