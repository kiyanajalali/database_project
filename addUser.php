<?php
	include 'connect.php';

$UserName = $_POST['userName'];
$email =$_POST['Email'];
$last_name =$_POST['last_name'];
$first_name=$_POST['first_name'];
$password=$_POST['password'];
$nationalty =$_POST['nationality'];

$usertype =$_POST['user_type'];


$q_id =$_POST['q_id'];
$answer =$_POST['answer'];


$query = " select * FROM user WHERE user_name=?";
$search= $connect -> prepare($query);
$search ->execute([$UserName]);
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



$verifyUser_name=false;
if($search->fetchAll(PDO::FETCH_ASSOC)==null)
	$verifyUser_name=true;


if ($verifyUser_name && $verpass){
	
	$sql= "INSERT INTO user(user_name,	email,first_name,last_name,	password ,nationality, user_type  ,q_id,answer) VALUES (?,?,?,?,?,?,?,?,?)";
	$create= $connect -> prepare($sql);
	$verifyadd=$create->execute([$UserName,$email,$last_name,$first_name,$password,$nationalty,$usertype,$q_id,$answer ]);
	if($verifyadd == 1)
		echo "1";
	
}

else
	echo "0";






?>