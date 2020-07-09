<?php
	include 'connect.php';

$userId = $_POST['user_id'];
$query = "select * from  user t1 inner join album t2 on t1.user_id = t2.user_id  inner join music t3 on t2.album_id = t3.album_id  inner join artist t4 on t1.user_id = t4.user_id WHERE t1.user_id=? ORDER BY music_id DESC LIMIT 5";
$search= $connect -> prepare($query);
$search ->execute([$userId]);
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
<th>user_id </th>
<th>artist_name </th>


</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['date']."</td>";
    echo"<td>".$row['duration']."</td>";
    echo"<td>".$row['album_id']."</td>";
    echo"<td>".$row['title']."</td>";
    echo"<td>".$row['music_id']."</td>";
    echo"<td>".$row['user_id']."</td>";
    echo"<td>".$row['artist_name']."</td>";

    echo"</tr>";

}
echo "</table>";
echo "</center>";


?>