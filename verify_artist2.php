<?php
    include 'connect.php';



$user_id=$_POST['user_id'];

$sql="SELECT * FROM request_artist where user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$temp = $search->fetchAll(PDO::FETCH_ASSOC);

$sql= "INSERT INTO artist(user_id,artist_name,nationality,start_date) VALUES (?,?,?,?)";
$create= $connect -> prepare($sql);
$create->execute([$temp[0]['user_id'],$temp[0]['artist_name'],$temp[0]['nationality'],$temp[0]['activity_start_date']]);


$sql =" DELETE  FROM request_artist where user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
?>