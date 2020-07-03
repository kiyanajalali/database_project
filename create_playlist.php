<?php
	include 'connect.php';
   				
    $user_id=$_POST['user_id'];

    $sql ="SELECT COUNT(*) FROM play_list where user_id=? ";
    $search= $connect -> prepare($sql);
    $search ->execute([$user_id]);
    $temp = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];
    $access_type=$_POST['access_type'];

    if($temp<5){
        $sql ="SELECT MAX(playlist_id) FROM play_list ";
        $search= $connect -> prepare($sql);
        $search ->execute([]);
        $maxp_id = $search->fetchAll(PDO::FETCH_ASSOC)[0]['MAX(playlist_id)'];
        $title=$_POST['title'];
        $p_id=$maxp_id + 1;
        $query="INSERT into play_list(playlist_id,user_id,title,access_type) values(?,?,?,?)";
        $create= $connect -> prepare($query);
        $res=$create->execute([$p_id,$user_id,$title,$access_type]);
            if($res==1)
                if($access_type==1){
                    echo "user ".$user_id."creat".$p_id;
                }
                elseif($access_type==2){
                    echo "user".$user_id."edite".$p_id;
                }
                else{
                    echo "user".$user_id."like".$p_id;
                }

    }
    else{
        echo " you have already 5 playlist";
    }



?>