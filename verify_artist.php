<?php
    include 'connect.php';


$query = " SELECT *   FROM  request_artist";
$search= $connect -> prepare($query);
$search ->execute();

echo"<center>";
echo"<h1>Join Multiple Tables value</h1>";
echo"<hr/>";
echo"<table border='1'>
<tr>
<th>user_id </th>
<th>artist_name </th>
<th>nationality </th>
<th>activity_start_date </th>

</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['user_id']."</td>";
    echo"<td>".$row['artist_name']."</td>";
    echo"<td>".$row['nationality']."</td>";
    echo"<td>".$row['activity_start_date']."</td>";

    echo"</tr>";

}
echo "</table>";
echo "</center>";

// $request_artist = $search->fetchAll(PDO::FETCH_ASSOC);

// $json_res=json_encode($request_artist);

// echo $json_res;
    

?>