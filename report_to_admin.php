<?php
    include 'connect.php';


$user_id=$_POST['user_id'];


$sql="SELECT user_type   FROM user where user_id=?";
$search= $connect -> prepare($sql);
$search ->execute([$user_id]);
$report = $search->fetchAll(PDO::FETCH_ASSOC)[0]['user_type'];
if($report== 'a'){
$query = " SELECT *   FROM report ";
$search= $connect -> prepare($query);
$search ->execute([]);


$report = $search->fetchAll(PDO::FETCH_ASSOC);

$json_res=json_encode($report);

echo $json_res;
}

else{
    echo " you are not admin "
}

?>