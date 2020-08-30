<?php
include("common_info/db.php");


// print_r($_POST);
$u = $_POST['username'];
$p = sha1($_POST['password']);

$que = "SELECT * FROM employer WHERE username = '$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)>=1) // when email is correct
{
	$data = mysqli_fetch_assoc($result); // this function is getting data form $result and make associate array
	if($data['password']==$p)
	{
		$_SESSION['name']=$data['company_name']; // full_name insert into session
		$_SESSION['username']=$data['username']; // full_name insert into session
		$_SESSION['email']=$data['email'];

		$_SESSION['id']=$data['id'];

		
		$_SESSION['is_company_logged_in']=true;



		header("location:employer_dashboard.php");
	}
	else
	{
		$_SESSION['msg']= "This Password is Incorrect !";
		header("location:login_employer.php");
	}
}
else // when email is incorrect
{
	$_SESSION['msg']= "This Email or Password is Incorrect !";
	header("location:login_employer.php");
}

?>