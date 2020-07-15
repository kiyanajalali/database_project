<?php
include 'connect.php';

$user_id=$_POST['user_id'];

$sql="SELECT * FROM play where user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$played= $search->fetchAll(PDO::FETCH_ASSOC);
$geners=array();
for($i=0; $i<sizeof($played);$i++){
    $sql="SELECT * FROM music where music_id=?";
    $search= $connect -> prepare($sql);
    $search ->execute([$played[$i]['music_id']]);  
    $temp= $search->fetchAll(PDO::FETCH_ASSOC)[0]['album_id'];

    $sql="SELECT gener FROM album where album_id=?";
    $search= $connect -> prepare($sql);
    $search ->execute([$max_key]);  
    $temp= $search->fetchAll(PDO::FETCH_ASSOC)[0]['gener'];

    if(empty($geners[$temp]))
        $geners[$temp]=1;
    else
        $geners[$temp] += 1;
}

$max_key = -1;
$max_val = -1;

foreach ($geners as $key => $value) {
  if ($value > $max_val) {
    $max_key = $key;
    $max_val = $value;
  }
}



?>