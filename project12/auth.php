<?php
include("common_info/db.php");


// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['password'];

$que = "SELECT * FROM candidate WHERE email = '$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)>=1) // when email is correct
{
	$data = mysqli_fetch_assoc($result); // this function is getting data form $result and make associate array
	if($data['password']==$p)
	{
		$_SESSION['name']=$data['full_name']; // full_name insert into session
		$_SESSION['email']=$data['email'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_logged_in']=true;

		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']= "This Password is Incorrect !";
		header("location:login.php");
	}
}
else // when email is incorrect
{
	$_SESSION['msg']= "This Email or Password is Incorrect !";
	header("location:login.php");
}

?>