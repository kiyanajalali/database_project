<?php
    include 'connect.php';

$music_id=$_POST['music_id'];
$album_id=$_POST['album_id'];

$r ="DELETE FROM music WHERE music_id=? and album_id=? ";
$search= $connect -> prepare($r);
echo $search ->execute([$music_id,$album_id]);

echo 'delete music';



?>