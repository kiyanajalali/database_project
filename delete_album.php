<?php
    include 'connect.php';

$album_id=$_POST['album_id'];

$r ="DELETE FROM album WHERE album_id=? ";
$search= $connect -> prepare($r);
$search ->execute([$album_id]);

echo 'delete album';
    
?>