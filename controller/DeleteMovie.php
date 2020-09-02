<?php 
ini_set('display_errors', 'on');
require("../model/film.class.php");

$movie_id = "";
$user_id = "";

$movie_id = $_REQUEST["movie_id"];
$user_id = $_REQUEST["user_id"];

$film = new FilmModel(); 

if(isset($movie_id) && isset($user_id))
{
    $film->updateFilmByMovieId($movie_id,$user_id);
}
header("Location: ../afficher_video/play.php");