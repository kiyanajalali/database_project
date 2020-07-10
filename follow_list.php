
<?php
include 'connect.php';

$user_id=$_POST['user_id'];

$sql="SELECT * FROM follow where user1_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user1= $search->fetchAll(PDO::FETCH_ASSOC);

$sql="SELECT * FROM follow where user2_id=? ";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$user2 = $search->fetchAll(PDO::FETCH_ASSOC);

for($i=0; $i<sizeof($user1);$i++){
    $sql="SELECT user_name FROM user where user_id=?";
    $search= $connect -> prepare($sql);
    $search ->execute([$user1[$i]['user2_id']]);  
    $following[$i]= $search->fetchAll(PDO::FETCH_ASSOC)[0]['user_name'];

 

}

for($i=0; $i<sizeof($user2);$i++){
    $sql="SELECT user_name FROM user where user_id=?";
    $search= $connect -> prepare($sql);
    $search ->execute([$user1[$i]['user1_id']]);  
    $follower[$i]= $search->fetchAll(PDO::FETCH_ASSOC)[0]['user_name'];


}
$result['following']=$following;
$result['follower']=$follower;

$json_res=json_encode($result);

echo $json_res;
?>