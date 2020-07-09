<?php
	include 'connect.php';

$playListId = $_POST['playlist_id'];
$query = "select * from  play_music t1 inner join music t2 on t1.music_id = t2.music_id WHERE t1.playlist_id=?";
$search= $connect -> prepare($query);
$search ->execute([$playListId]);
echo"<center>";
echo"<h1>Join Multiple Tables value</h1>";
echo"<hr/>";
echo"<table border='1'>
<tr>
<th>date </th>
<th>duration </th>
<th>album_id </th>
<th>title </th>
<th>music_id </th>
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['date']."</td>";
    echo"<td>".$row['duration']."</td>";
    echo"<td>".$row['album_id']."</td>";
    echo"<td>".$row['title']."</td>";
    echo"<td>".$row['music_id']."</td>";
    echo"</tr>";

}
echo "</table>";
echo "</center>";


?>