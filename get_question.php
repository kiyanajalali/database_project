<?php


    include 'connect.php';



    $query = " SELECT *   FROM  question ";

    $search= $connect -> prepare($query);

    $search ->execute();

    echo"<center>";
echo"<h1>Join Multiple Tables value</h1>";
echo"<hr/>";
echo"<table border='1'>
<tr>
<th>question_id </th>
<th>question </th>
</tr>";

while($row = $search->fetch(PDO::FETCH_BOTH) ){
    echo"<tr>";
    echo"<td>".$row['question_id']."</td>";
    echo"<td>".$row['question']."</td>";
    echo"</tr>";

}
echo "</table>";
echo "</center>";


    // $question = $search->fetchAll(PDO::FETCH_ASSOC);

    // $json_res=json_encode($question);

    // echo $json_res;


    ?>
