<?php
    include 'connect.php';
    	
    $user_id=$_POST['user_id'];
    $title=$_POST['title'];
    $gener=$_POST['gener'];
    $date = date("Y-m-d");

    $query="INSERT into album(user_id,title,gener,date) values(?,?,?,?)";
    $create= $connect -> prepare($query);
    $res=$create->execute([$user_id,$title,$gener,$date]);
    $musics=$_POST['musics'];

    $json_res=json_decode($musics);


    if(sizeof($json_res)==1){
        $duration=$json_res[$i]['duration'];
        $query="INSERT into music(album_id,title,duration,date) values(?,?,?,?)";
        $create= $connect -> prepare($query);
        $result=$create->execute([$album_id,$title,$duration,$date]);
    }
    else{

    
        for($i=0;$i<sizeof($json_res);$i++){
            $title=$json_res[$i]['title'];
            $duration=$json_res[$i]['duration'];
            $query="INSERT into music(album_id,title,duration,date) values(?,?,?,?)";
            $creattte= $connect -> prepare($query);
            $result=$creattte->execute([$album_id,$title,$duration,$date]);

        
        
        
        }
}


        ?>



