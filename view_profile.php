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

    $query="SELECT* from album where user_id=? ";
    $search= $connect -> prepare($query);
    $search ->execute([$user_id]);
    $album= $search->fetchAll(PDO::FETCH_ASSOC);
    $user[0]['album']= $album;
    $user[0]['max_gener'] = "";
    $count_gener = 0;

    for($i=0;$i<sizeof($album);$i++){
        $sql="SELECT COUNT(*) from album where gener=?";
        $search= $connect -> prepare($sql);
        $search ->execute([$album[$i]['gener']]);
        $temp= $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];
        if($temp>$count_gener){
            $temp=$count_gener;
            $user[0]['max_gener']=$album[$i]['gener'];
        }
    }
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
    $playList[$i]['playlist_id_music_count']= $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];
}

$user[0]['playList'] = $playList;

$sql="SELECT date from play_music where playlist_id=?";
$search= $connect -> prepare($sql);
$search ->execute([$playList[sizeof($playList)-1]['playlist_id']]);
$user[0]['last_update'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['date'];




$json_res=json_encode($user);

echo $json_res;



