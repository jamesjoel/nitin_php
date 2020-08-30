<?php
include("common_info/db.php");

// print_r($_POST);
extract($_POST); 
$id = $_SESSION['id'];
// this function is convert all associative key into variable


	// Insert Query
$query = "INSERT INTO jobs (employer_id, job_title, job_address, job_location, job_type, salary, description) VALUES ('$id', '$job_title', '$job_address', '$job_location', '$job_type', '$salary', '$desc')";

mysqli_query($con, $query);
header("location:create_jobs.php");
// print_r($query);

  
?>