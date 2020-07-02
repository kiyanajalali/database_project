<?php
    include 'connect.php';



    $music_id=$_POST['music_id'];
    $user_id=$_POST['user_id'];
    $playlist_id=$_POST['playlist_id'];
    $date = date("Y-m-d");

    $query = "SELECT user_id from play_list WHERE playlist_id=? ";
    $search= $connect -> prepare($query);
    $search ->execute([$playlist_id]);
    $temp = $search->fetchAll(PDO::FETCH_ASSOC);
    $access = false;
    $i=0;
    for($i=0;$i<sizeof($temp);$i++){

        if($temp[$i]['user_id']==$user_id)
            $access = true;
    }

    if($access){
        $sql= "INSERT INTO play_music(music_id,playlist_id,date) VALUES (?,?,?)";
        $create= $connect -> prepare($sql);
        $res= $create->execute([$music_id,$playlist_id,$date]);
        if($res=1){
            echo "music with this id ".$music_id." add to playlist with this id ".$playlist_id." date ".$date;
        }
    }
    else
    echo "you have not permission to edit this play list ";
    ?>
        