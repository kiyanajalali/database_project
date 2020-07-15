<?php
include 'connect.php';

$user_id=$_POST['user_id'];

$sql="SELECT * FROM play where user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$played= $search->fetchAll(PDO::FETCH_ASSOC);
$albums=array();
for($i=0; $i<sizeof($played);$i++){
    $sql="SELECT * FROM music where music_id=?";
    $search= $connect -> prepare($sql);
    $search ->execute([$played[$i]['music_id']]);  
    $temp= $search->fetchAll(PDO::FETCH_ASSOC)[0]['album_id'];
    if(empty($albums[$temp]))
        $albums[$temp]=1;
    else
        $albums[$temp] += 1;
}

$max_key = -1;
$max_val = -1;

foreach ($albums as $key => $value) {
  if ($value > $max_val) {
    $max_key = $key;
    $max_val = $value;
  }
}


$sql="SELECT gener FROM album where album_id=?";
$search= $connect -> prepare($sql);
$search ->execute([$max_key]);  
$temp= $search->fetchAll(PDO::FETCH_ASSOC)[0]['gener'];


$suggest="SELECT * from album where gener=? ";
$search= $connect -> prepare($suggest);
$search ->execute([$temp]);  
$temp= $search->fetchAll(PDO::FETCH_ASSOC);

$rand=rand(0,sizeof($temp)-1);


$json_res=json_encode($temp[$rand]);

echo $json_res;






?>