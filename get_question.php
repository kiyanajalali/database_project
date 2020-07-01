<?php


    include 'connect.php';



    $query = " SELECT *   FROM  question ";

    $search= $connect -> prepare($query);

    $search ->execute();

    $question = $search->fetchAll(PDO::FETCH_ASSOC);

    $json_res=json_encode($question);

    echo $json_res;


    ?>
