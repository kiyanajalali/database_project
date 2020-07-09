<?php
	include 'connect.php';
//12350
$playListId = $_POST['playlist_id'];
$generGhaleb = "hi";
$query = "select gener from  album t1 inner join music t2 inner join play_music t3 WHERE t3.playlist_id=? GROUP BY gener ORDER BY COUNT(*) DESC LIMIT 1";
$search= $connect -> prepare($query);
$search ->execute([$playListId]);
echo"<center>";
echo"<h1>The dominant genre</h1>";
echo"<table border='1'>
<tr>
<th>gener </th>
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['gener']."</td>";
    $generGhaleb = $row['gener'];
    echo"</tr>";
}
echo "</table>";
echo "</center>";
echo"<hr/>";
$query2 = "select * from  album t1 inner join music t2 on t1.album_id = t2.album_id inner join play_music t3  WHERE t3.playlist_id <> ? AND t1.gener =? LIMIT 2";
$search2= $connect -> prepare($query2);
$search2 ->execute([$playListId,$generGhaleb]);
echo"<center>";
echo"<h1>Suggested songs and genres</h1>";
echo"<table border='1'>
<tr>
<th>date </th>
<th>duration </th>
<th>album_id </th>
<th>title </th>
<th>music_id </th>
<th>user_id </th>
<th>gener </th>
<th>playList_id </th>

</tr>";

while($row2 = $search2->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row2['date']."</td>";
    echo"<td>".$row2['duration']."</td>";
    echo"<td>".$row2['album_id']."</td>";
    echo"<td>".$row2['title']."</td>";
    echo"<td>".$row2['music_id']."</td>";
    echo"<td>".$row2['user_id']."</td>";
    echo"<td>".$row2['gener']."</td>";
    echo"<td>".$row2['playlist_id']."</td>";



    echo"</tr>";

}
echo "</table>";
echo "</center>";

?>