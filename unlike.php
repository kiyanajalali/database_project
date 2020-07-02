<?php
    include 'connect.php';

$music_id=$_POST['music_id'];
$user_id=$_POST['user_id'];

$sql ="DELETE   FROM playlist_like where music_id=? and user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$music_id,$user_id]);

echo 'user'.$user_id."unlike".$music_id;