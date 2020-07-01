<?php
    include 'connect.php';

$UserName = $_POST['userName'];
$email =$_POST['Email'];
$last_name =$_POST['last_name'];
$first_name=$_POST['first_name'];
$password=$_POST['password'];
$nationalty =$_POST['nationality'];
$q_id =$_POST['q_id'];
$answer =$_POST['answer'];


$verpass=false;
$verpassword=false;
$veralpha=false;
$vernum=false;

if(strlen($password)>=8)
$verpassword=true;
$strs = str_split($password);
for($j=0;$j<strlen($password);$j=$j+1){

 if(is_numeric($strs[$j])){
     $vernum=true;
     
 }
 if(ctype_alpha($strs[$j])){

     $veralpha=true;
 }
if($verpassword && $veralpha && $vernum)
 $verpass=true;
else
 $verpass=false;
}



if ($verpass){
 
 $sql= "UPDATE user SET email =?,first_name =? ,last_name=?, password=? ,nationality=? ,q_id=? ,answer=? WHERE user_name=? ";
 $create= $connect -> prepare($sql);
echo $create->execute([$email,$first_name,$last_name,$password,$nationalty,$q_id,$answer ,$UserName]);
 
}

else
 echo "0";

?>


