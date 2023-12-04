<?php
include '../dataBase/connect.php';
include '../Model/adminScript.php';

global $connection;
function add(){
    $title = $_POST['title'];
    $year = $_POST['year'];
    $country = $_POST['country'];
    $poster = $_FILES['poster']['name'];
    $tempfile = $_FILES['poster']['tmp_name'];
    $folder = "../assets/img" . $poster;
    $category = $_POST['category'];

    $query = addMovie();
    $stmt = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt,"ssssi",$title , $year, $country, $folder, $category);
    $result = mysqli_stmt_execute($stmt);
}

?>