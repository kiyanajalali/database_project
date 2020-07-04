<?php
    include 'connect.php';

$user_id=$_POST['user_id'];

$r ="DELETE FROM user WHERE user_id=? ";
$search= $connect -> prepare($r);
$search ->execute([$user_id]);

echo ' delete user  '.$user_id;



?>