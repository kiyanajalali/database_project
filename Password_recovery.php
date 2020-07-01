<?php


    include 'connect.php';


$Username = $_POST['userName'];




$query = " select *  FROM  user  WHERE user_name=?";
$search= $connect -> prepare($query);
$search ->execute([$Username]);
$user = $search->fetchAll(PDO::FETCH_ASSOC);

$q_id = $user[0]['q_id'];

$query = " select  question  FROM  question  WHERE question_id=?";
$search= $connect -> prepare($query);
$search ->execute([$q_id]);
$question = $search->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($question);


?>