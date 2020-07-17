<?php
	include 'connect.php';

$userId = $_POST['user_id'];
$music_id = $_POST['music_id'];

$query = "SELECT COUNT(*) from play where COUNT(music_id =?) > 0 GROUP BY user_id=?   ";
$search= $connect -> prepare($query);
$search ->execute([$userId,$music_id]);

// $likesong = $search->fetchAll(PDO::FETCH_ASSOC);
$user[0]['findFollowerArtist'] = $search->fetchAll(PDO::FETCH_ASSOC)[0]['COUNT(*)'];
$json_res=json_encode($user);
echo json_res;
// while($row = $search->fetch(PDO::FETCH_BOTH) ){
    // echo"<tr>";
    // echo"<td>".$row['music_id']."</td>";
    // echo"<td>".$row['duration']."</td>";
    // echo"<td>".$row['album_id']."</td>";
    // echo"<td>".$row['title']."</td>";
    // echo"<td>".$row['music_id']."</td>";
    // echo"<td>".$row['user_id']."</td>";
    // echo"<td>".$row['artist_name']."</td>";

    // echo"</tr>";

// }
// echo "</table>";
// echo "</center>";


?>