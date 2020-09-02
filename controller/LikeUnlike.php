<?php
ini_set('display_errors', 'on');
require("../model/like_unlike.class.php");


$movie_id = $_REQUEST['movie_id'];
$user_id = $_REQUEST['user_id'];
$lk = $_REQUEST['like'];


$like = new LikeUnlikeModel();

if(isset($movie_id) && isset($user_id) && $lk == 1)
{
    $like = $like->insertLike($movie_id,$user_id);

}
else
{
    $like = $like->insertUnlike($movie_id,$user_id);
   
}


