
<?php
include 'connect.php';

$user_id=$_POST['user_id'];

$sql="SELECT COUNT(*) FROM follow where user1_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user[0]['following'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];

$sql="SELECT COUNT(*) FROM follow where user2_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user[0]['follower'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];

for($i=0; $i<sizeof();$i++){
    

}


$json_res=json_encode($user);

echo $json_res;
?>