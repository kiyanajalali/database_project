<?php


    include 'connect.php';

$answer = $_POST['answer'];
$username = $_POST['user_name'];
$newpas = $_POST['password'];


$query = " select answer  FROM  user  WHERE user_name=?";
$search= $connect -> prepare($query);
$search ->execute([$username]);
$answer2 = $search->fetchAll(PDO::FETCH_ASSOC)[0]['answer'];

if($answer==$answer2){


    $sql = "update user set password = ? where user_name=? ";

    $create= $connect -> prepare($sql);
    echo $create->execute([$newpas,$username]);

}

