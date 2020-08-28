<?php
// print_r($_POST);
/*
	Connect to Database

	$con = mysqli_connect("hostname", "username", "password", "dbname")



*/
include("common_info/db.php");

$a = $_POST['full_name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['address'];
$e = $_POST['gender'];
$f = $_POST['city'];


$query = "INSERT INTO candidate (full_name, email, password, address, city, gender) VALUES ('$a', '$b', '$c', '$d', '$f', '$e')";

// now fire the query

mysqli_query($con, $query);


header("location:login.php");



/*
	When we use table in Mysql we are doing mainly 4 things

	1. data save into table ------ INSERT

	INSERT INTO table (col1, col2, col3, col4 ..... ) VALUES ('val1', 'val2', 'val3', 'val4', ....)





	2. data update into table ----- UPDATE

	3. data delete form table ----- DELETE 

	4. getting data form table ---- SELECT



*/
?>