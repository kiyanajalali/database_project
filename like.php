<?php
	include 'connect.php';


$user_id=$_POST['user_id'];
$music_id=$_POST['music_id'];

$sql="INSERT into playlist_like(user_id,music_id) values(?,?)";
$create= $connect -> prepare($sql);
$res=$create->execute([$user_id,$music_id]);

if($res==1){
    echo "user".$user_id."like".$music_id;
}

