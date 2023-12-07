<?php

function getMovies(){
   $query = "SELECT * from movies";
   return $query;
}

function addToFavorite($user_id,$movie_id){
   $query = "INSERT INTO `stat` (stat,user_id, movie_id ) values ('favorite',$user_id,$movie_id)";
   return $query;
}

function addToWatch($user_id,$movie_id){
   $query = "INSERT INTO `stat` (stat,user_id, movie_id ) values ('towatch',$user_id,$movie_id)";
   return $query;
}

function getAllFavorite(){
   $query = "SELECT m.title as title, s.stat as stat, m.poster as poster, s.movie_id as movie_id from stat s, movies m 
   where stat='favorite' AND s.movie_id = m.id";
   return $query;
}

function getAllToWatch(){
   $query = "SELECT m.title as title, s.stat as stat, m.poster as poster, s.movie_id as movie_id from stat s, movies m 
   where stat='towatch' AND s.movie_id = m.id";
   return $query;
}

?>