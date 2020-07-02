<?php
	include 'connect.php';
   				
    $music_id=$_POST['music_id'];
    $user_id=$_POST['user_id'];
    $temp = date("Y-m-d");

    $sql="SELECT COUNT(*) FROM play where user_id=? AND date=? ";
    $search= $connect -> prepare($sql);
    $search ->execute([$user_id,$temp]);
    $temppp = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];
    if($temppp<=5){

    
        $sql= "INSERT INTO play (music_id,user_id,date) VALUES (?,?,?)";

        $create= $connect -> prepare($sql);
        $res=$create->execute([$music_id ,$user_id,$temp]);

        if($res==1 ){
            echo "user with id =".$user_id."play music id=".$music_id.""." in".$temp;
        }		
    }
    else{
        echo "not permission to play music";
    }  
    ?>