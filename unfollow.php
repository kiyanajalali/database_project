<?php
    include 'connect.php';

$user_id1 =$_POST['user_id1'];
$user_id2 =$_POST['user_id2'];


$sql="DELETE FROM follow where user_id1=?,user_id2=?";
$create= $connect -> prepare($sql);
$create->execute([$user_id1, $user_id2]);

echo $user_id1."unfollow ".$user_id2;

?>