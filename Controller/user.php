<?php
include __DIR__ . '/../dataBase/connect.php';
include __DIR__ . '/../Model/userScript.php';

$favArray = array();
$watArray = array();

function getFavorites(){
    global $connection;
    $query = getAllFavorite();
    $result = mysqli_query($connection,$query);
    return $result;
}


function getToWatch(){
    global $connection;
    $query = getAllToWatch();
    $result = mysqli_query($connection,$query);
    return $result;
}

 function favorites(){
    $favArray = array();
    global $connection;
    $query = getAllFavorite();
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        array_push($favArray,$row['movie_id']);
    }
    return $favArray;
    
 }

 function toWatch(){
    $watArray = array();
    global $connection;
    $query = getAllToWatch();
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        array_push($watArray,$row['movie_id']);
    }
    return $watArray;
    
 }

?>