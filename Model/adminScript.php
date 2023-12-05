<?php
function addMovie(){
    $insert = "INSERT into `movies` (title, production_year, country, poster, category_id)
    values (?,?,?,?,?)";
    return $insert;
}

function showMovies(){
    $query ='SELECT m.id, m.title as title, m.production_year as year, m.country as country, c.name as category, m.poster as poster
     from movies m , categories c 
     where m.category_id=c.id ';
     return $query;
}

function selectmovie(){

}

function getCategories(){
    $query = 'SELECT * FROM `categories`';
    return $query ;
}

function delete($table, $id){
    $query = "DELETE from `$table` where id =$id";
    return $query;
}

function selectById($table,$id){
    $query = "SELECT * from `$table` where id = $id";
    return $query;
}

function updateMovie($id,$title,$year,$country, $poster,$category){
    $query = "update `movies` set title ='$title', production_year='$year', country='$country' , poster= $poster, category_id=$category  where id=$id";
    return $query;
}
function addCategory($name,$description){
    $query = "INSERT into `categories` (name, description) values ('$name','$description')";
    return $query;
}

function updatecategory($id, $name, $description){
    $query =  "UPDATE `categories` set name ='$name', description='$description' where id=$id";
    return $query;
}

function addCast($f_name,$l_name,$age){
    $sql="INSERT into casts (first_name, last_name, age) values ('$f_name', '$l_name', $age)";
    return $sql;
}

function getCast(){
    $query= 'SELECT * from `casts`';
    return $query;
}
?>