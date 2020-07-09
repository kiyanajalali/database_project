<?php
	include 'connect.php';

$userFollow = 2;
$query = "select * from  play t1 inner join follow t2 on t1.user_id = t2.user1_id inner join music t3 on t1.music_id = t3.music_id ORDER BY p_id DESC LIMIT 1";
$search= $connect -> prepare($query);
$search ->execute([$userFollow]);
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
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['date']."</td>";
    echo"<td>".$row['duration']."</td>";
    echo"<td>".$row['album_id']."</td>";
    echo"<td>".$row['title']."</td>";
    echo"<td>".$row['music_id']."</td>";
    echo"<td>".$row['user_id']."</td>";
    echo"</tr>";

}
echo "</table>";
echo "</center>";


?>