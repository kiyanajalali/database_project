
<?php
    include 'connect.php';

$user_id =$_POST['user_id'];
$sql =" DELETE  FROM request_artist where user_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);


?>