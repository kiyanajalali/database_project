<?php
    include 'connect.php';

$music_id=$_POST['music_id'];
$playlist_id=$_POST['playlist_id'];

$sql ="DELETE   FROM play_music where music_id=? and playlist_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$music_id,$playlist_id]);

echo 'delete music';
    
?>