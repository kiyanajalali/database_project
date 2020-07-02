<?php
	include 'connect.php';


$query = " SELECT *   FROM  music ";

$search= $connect -> prepare($query);

$search ->execute();

$music_id = $search->fetchAll(PDO::FETCH_ASSOC);

$json_res=json_encode($music_id);

echo $json_res;


?>


