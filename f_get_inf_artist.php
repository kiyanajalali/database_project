<?php
    include 'connect.php';

$artist_name=$_POST['artist_name'];
$nationality=$_POST['nationality'];
$activity_start_date=$_POST['activity_start_date'];
$user_id=$_POST['user_id'];


$sql= "INSERT INTO request_artist(artist_name,nationality,activity_start_date,user_id) VALUES (?,?,?,?)";
$create= $connect -> prepare($sql);
echo $create->execute([$artist_name,$nationality,$activity_start_date,$user_id]);


    	?>
    
   


