<?php


    include 'connect.php';



    $query = " SELECT *   FROM  report ";

    $search= $connect -> prepare($query);

    $search ->execute();

    $report = $search->fetchAll(PDO::FETCH_ASSOC);

    $json_res=json_encode($report);

    echo $json_res;


    ?>
