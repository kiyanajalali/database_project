<?php
    include 'connect.php';
$user_id=$_POST['user_id'];
$query = " SELECT *   FROM playlist_like where user_id=? ";
$search= $connect -> prepare($query);
$search ->execute([$user_id]);


$likesong = $search->fetchAll(PDO::FETCH_ASSOC);

$json_res=json_encode($likesong);

echo $json_res;

?>
    