<?php
    include 'connect.php';


if(isset($_POST['userName'])){
    $UserName= $_POST['userName'];
    $sql =" DELETE  FROM user where user_name=? ";
    $search= $connect -> prepare($sql);
    $search ->execute([$UserName]);
    echo 'delete user';
    
}
else{
    echo 'no id';
}
?>