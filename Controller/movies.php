<?php
include '../../dataBase/connect.php';
include '../../Model/adminScript.php';


function add(){
    global $connection;

    $title = $_POST['title'];
    $year = $_POST['year'];
    $country = $_POST['country'];
    $poster = $_FILES['poster']['name'];
    $tempfile = $_FILES['poster']['tmp_name'];
    $folder = "../assets/img" . $poster;
    $category = $_POST['category'];

    $query = addMovie();
    $stmt = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt,"ssssi",$title , $year, $country, $poster, $category);
    $result = mysqli_stmt_execute($stmt);
}


function showallMovies(){
    global $connection;
    $sql = showMovies();
    $result = mysqli_query($connection, $sql);
    return $result;
}

function getAllCategories(){
    global $connection;
    $sql = getCategories();
    $result = mysqli_query($connection, $sql);
    return $result;
    
}

function getMovie($id){
    global $connection;
    $sql = selectById("movies",$id);
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function update($id, $title,$year,$country, $poster,$category){
    global $connection;
    $update = updateMovie($id, $title,$year,$country, $poster ,$category );
    $result = mysqli_query($connection, $update);
}

if(isset($_GET['deletedid'])){
    $id = $_GET['deletedid'];
    $result = deleteMovie($id);
    if($result){
        header('location: ../pages/film/film.php');
    }

}

function deleteMovie($id){
    global $connection; 
    $query = delete("movies", $id);
    $result = mysqli_query($connection,$query);
   return $result;
}

?>