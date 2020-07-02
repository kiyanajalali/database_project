<?php
    include 'connect.php';
$user_id=$_POST['user_id'];
$playlist_id=$_POST['playlist_id'];

$sql ="DELETE   FROM play_list where user_id=? and playlist_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id,$playlist_id]);
echo"delete playlist";