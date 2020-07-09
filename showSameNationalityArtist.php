<?php
	include 'connect.php';

$nationality = $_POST['nationality'];
$query = "SELECT DISTINCT * FROM  user t1 INNER JOIN album t2  ON t1.user_id = t2.user_id INNER JOIN music t3 ON t2.album_id = t3.album_id INNER JOIN artist t4 ON t1.nationality = t4.nationality WHERE t1.nationality=? ORDER BY music_id DESC LIMIT 5";
$search= $connect -> prepare($query);
$search ->execute([$nationality]);
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
<th>nationality </th>
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
    echo"<td>".$row['nationality']."</td>";


    echo"</tr>";

}
echo "</table>";
echo "</center>";


?>