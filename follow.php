

<?php
    include 'connect.php';

$user_id1 =$_POST['user_id1'];
$user_id2 =$_POST['user_id2'];


$sql= "INSERT INTO follow(user_id1,user_id2) VALUES (?,?)";
$create= $connect -> prepare($sql);
$create->execute([$user_id1, $user_id2]);

echo $user_id1."follow ".$user_id2;

?>