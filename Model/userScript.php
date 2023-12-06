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
?>