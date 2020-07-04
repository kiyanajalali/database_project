<?php
    include 'connect.php';
$report_id=$_POST['report_id'];


$sql ="DELETE FROM report where report_id=?";
$search= $connect -> prepare($sql);
$search ->execute([$report_id]);
echo"delete report".$report_id;
?>