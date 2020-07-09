<?php
	include 'connect.php';

$album_id = $_POST['music_id'];

$query = "select * from  music  WHERE album_id=?";
$search= $connect -> prepare($query);
$search ->execute([$album_id]);
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