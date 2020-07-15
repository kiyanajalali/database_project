<?php
	include 'connect.php';


$query = " SELECT *   FROM  music ";

$search= $connect -> prepare($query);

$search ->execute();
echo"<center>";
echo"<h1>show popular music</h1>";
echo"<table border='1'>
<tr>
<th>music_id </th>
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['music_id']."</td>";
    echo"</tr>";

}
echo "</table>";
echo "</center>";
// $music_id = $search->fetchAll(PDO::FETCH_ASSOC);

// $json_res=json_encode($music_id);

// echo $json_res;


?>


