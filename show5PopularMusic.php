<?php
	include 'connect.php';

$query = "select title from  play t1 inner join music t2 on t1.music_id = t2.music_id GROUP BY title ORDER BY COUNT(*) DESC LIMIT 5";
$search= $connect -> prepare($query);
$search ->execute();

echo"<center>";
echo"<h1>show popular music</h1>";
echo"<table border='1'>
<tr>
<th>title </th>
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['title']."</td>";
    echo"</tr>";

}
echo "</table>";
echo "</center>";

?>