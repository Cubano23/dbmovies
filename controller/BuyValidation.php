<?php
ini_set('display_errors', 'on');
require("../model/film.class.php");

$str_json = file_get_contents('php://input');

$php_arr = json_decode($str_json,true);

$film = new FilmModel();

foreach($php_arr as $arr)
{
    $film->insertFilm($arr['Photo'],$arr['Titre'],$arr['Annee'],$arr['id'],$arr['Prix'],$_SESSION['id']);
  
}


?>