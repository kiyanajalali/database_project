<?php
    include 'connect.php';

    $user_id=$_POST['user_id'];
    $start_time= date("Y-m-d");

    $expiretion_time_p=$_POST['expiretion_time_p'];
    


    
    $sql= "INSERT INTO premium_listener (user_id,start_time,expiretion_time) VALUES (?,?,?)";
    $create= $connect -> prepare($sql);
    $res=$create->execute([$user_id,$start_time,$expiretion_time_p]);

    $credit_n=$_POST['credit_n'];		
    $expiration_date_c=$_POST['expiration_date_c'];
    $sql= "INSERT INTO credit_card(user_id,credit_n,expiration_date) VALUES (?,?,?)";
    $create= $connect -> prepare($sql);
    $res=$create->execute([$user_id,$credit_n,$expiration_date_c]);

    ?>