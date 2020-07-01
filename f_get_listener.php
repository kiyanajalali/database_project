<?php
    include 'connect.php';

$birth_date=$_GET['birth_date'];
$user_id=$_GET['user_id'];


$sql= "INSERT INTO listener(birth_date,user_id) VALUES (?,?)";
$create= $connect -> prepare($sql);
echo $create->execute([$birth_date,$user_id]);


    	?>
    