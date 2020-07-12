<?php
include 'connect.php';

$string=$_POST['string'];
$sql="SELECT first_name,last_name ,user_name 
from user
where  first_name like '%".$string."%'
or last_name like '%".$string."%' 
or  user_name like '%".$string."%'";

$search= $connect -> prepare($sql);
$search ->execute([]);
$user = $search->fetchAll(PDO::FETCH_ASSOC);


$sql="SELECT title , music_id
from music 
where title like '%".$string."%'";
$search= $connect -> prepare($sql);
$search ->execute([]);
$music= $search->fetchAll(PDO::FETCH_ASSOC);

$sql="SELECT title ,user_id    
from album
where title like '%".$string."%'
or user_id like '%".$string."%'";
$search= $connect -> prepare($sql);
$search ->execute([]);
$album= $search->fetchAll(PDO::FETCH_ASSOC);

for($i=0; $i<sizeof($album);$i++){
    $query="SELECT artist_name from artist where user_id=?";
    $search= $connect -> prepare($query);
    $search ->execute([$album[$i]['user_id']]);

    $album[$i]['user_id']= $search->fetchAll(PDO::FETCH_ASSOC)[$i]['artist_name'];

}

$sql="SELECT title
from play_list
where title like '%".$string."%'";
$search= $connect -> prepare($sql);
$search ->execute([]);
$play_list= $search->fetchAll(PDO::FETCH_ASSOC);
$result['user']=$user;
$result['album']=$album;
$result['play_list']=$play_list;
$result['music']=$music;

$json_res=json_encode($result);

echo $json_res;
?>