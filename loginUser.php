<?php


    include 'connect.php';

    $UserName = $_POST['UserName'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $query = " select  user_type , password ,user_name  FROM  user  WHERE user_name=?";
    $search= $connect -> prepare($query);
    $search ->execute([$UserName]);
    $user = $search->fetchAll(PDO::FETCH_ASSOC);

    if($user[0]['password'] == $password && $user[0]['user_type']==$user_type )
        echo "1";
    else
        echo   "0";


    ?>