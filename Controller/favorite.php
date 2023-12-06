<?php
include '../dataBase/connect.php';
include '../Model/userScript.php';
$movie_id=$_GET['movieId'];
$user_id=$_GET['userId'];
echo $user_id;
echo $movie_id;

function addFavorie($user_id, $movie_id){
    echo "hello";
    global $connection;
    echo "here";
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
