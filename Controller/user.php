<?php
include __DIR__ . '/../dataBase/connect.php';
include __DIR__ . '/../Model/userScript.php';

$favArray = array();
$watArray = array();

function getFavorites($user_id){
    global $connection;
    $query = getUserFavorite($user_id);
    $result = mysqli_query($connection,$query);
    return $result;
}


function getToWatch($user_id){
    global $connection;
    $query = getUserToWatch($user_id);
    $result = mysqli_query($connection,$query);
    return $result;
}

 function favorites($user_id){
    $favArray = array();
    global $connection;
    $query = getUserFavorite($user_id);
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        array_push($favArray,$row['movie_id']);
    }
    return $favArray;
    
 }

 function toWatch($user_id){
    $watArray = array();
    global $connection;
    $query = getUserToWatch($user_id);
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        array_push($watArray,$row['movie_id']);
    }
    return $watArray;
    
 }

?>