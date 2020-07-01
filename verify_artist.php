<?php
    include 'connect.php';


$query = " SELECT *   FROM  request_artist";
$search= $connect -> prepare($query);
$search ->execute();


$request_artist = $search->fetchAll(PDO::FETCH_ASSOC);

$json_res=json_encode($request_artist);

echo $json_res;
    

?>