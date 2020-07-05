<?php
include 'connect.php';

$user_id=$_POST['user_id'];

$sql="SELECT first_name,last_name ,user_type
from user
where  user_id=? ";

$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user = $search->fetchAll(PDO::FETCH_ASSOC);

if($user[0]['user_type']=='s'){
$query = " SELECT artist_name FROM artist where user_id=?";
$search= $connect -> prepare($query);
$search ->execute([$user_id]);
$user[0]['artist_name']= $search->fetchAll(PDO::FETCH_ASSOC)[0]['artist_name'];
}
$sql="SELECT COUNT(*) FROM follow where user1_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user[0]['following'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];

$sql="SELECT COUNT(*) FROM follow where user2_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user[0]['follower'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];

$sql="SELECT playlist_id, title from play_list where user_id=? and access_type=1 ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$playList = $search->fetchAll(PDO::FETCH_ASSOC);
for($i=0;$i<sizeof($playList);$i++){
    $query="SELECT COUNT(*) from play_music where playlist_id=?";
    $search= $connect -> prepare($query);
    $search ->execute([$playList[$i]['playlist_id']]);
    $playList[$i]['playlist_id_music_count']= $search->fetchAll(PDO::FETCH_ASSOC)[$i]['COUNT(*)'];
}

$user[0]['playList'] = $playList;


$json_res=json_encode($user);

echo $json_res;



