<?php

function addMovie(){
    $insert = "insert into `movies` (title, production_year, country, poster, category_id)
    values (?,?,?,?,?)";
    return $insert;
}

function getAllCategories(){
    $query = 'select * from categories';
    return $query ;

function showMovies(){
    $query =' m.title, m.production_year, m.country, c.name, m.poster
     from movies m , categories c 
     where m.category_id=c.id ';
     return $query;
}
}

?>