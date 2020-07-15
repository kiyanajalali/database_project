<?php


    include 'connect.php';

    $UserName = $_POST['UserName'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $query = " select *  FROM  user  WHERE user_name=?";

    $hashedPass= md5($password."11");

    $search= $connect -> prepare($query);
    $search ->execute([$UserName]);
    $user = $search->fetchAll(PDO::FETCH_ASSOC);


if(empty($user)){
    echo 0000;
    exit();
}
    if($user[0]['password'] == $hashedPass && $user[0]['user_type']==$user_type ){
        echo "1";
        $query = " SELECT  expiretion_time  FROM premium_listener  WHERE user_id=?";
        $search= $connect -> prepare($query);
        $search ->execute([$user[0]['user_id']]);
        $question = $search->fetchAll(PDO::FETCH_ASSOC);
        $temp = date("Y-m-d");
        if($temp>$question[0]['expiretion_time']){
            $query="DELETE FROM premium_listener WHERE user_id=?  ";
            $search= $connect -> prepare($query);
            $search ->execute([$user[0]['user_id']]);
        }

    }
    else
        echo   "   n    ";

        if($user[0]['password'] != $hashedPass)
            echo "pass invalid";

            if( $user[0]['user_type']!=$user_type )
                echo "user type error";
        

    ?>