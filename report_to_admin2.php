<?php
    include 'connect.php';
    			
    
    $user_id=$_POST['user_id'];
    $music_id=$_POST['music_id'];
    $message=$_POST['message'];

    $sql= "INSERT INTO report(user_id,music_id,message) VALUES (?,?,?)";
        $create= $connect -> prepare($sql);
        $res= $create->execute([$user_id,$music_id,$message]);
        ?>