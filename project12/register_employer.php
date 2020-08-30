<?php
include("common_info/db.php");
include("common_info/header.php");
if(isset($_POST['submit'])) // this function is check that variable exits or not
{
	$company_name   =  $_POST['company_name'];
	$company_address = $_POST['company_address'];
	$company_city   =  $_POST['company_city'];
	$company_person =  $_POST['company_person'];
	$username       =  $_POST['username'];
	$company_email  =  $_POST['company_email'];
	$password       =  sha1($_POST['password']);
	


	// Insert Query

	$query =  "INSERT INTO employer( company_name, company_address, company_city, company_person, username, email, password)  VALUES('$company_name' , '$company_address' ,'$company_city' ,
'$company_person' ,'$username' , '$company_email' ,'$password')";

mysqli_query($con, $query);
// print_r($query);

 }                                                                                                                                                           





?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Employee Register</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Job Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>

<div class="container">
<div class="sixteen columns employee_register">	

<form method="post" action="">	

              <div class="form">
				<h5>Company Name</h5>
				<input class="search-field" type="text" name="company_name" placeholder="Company Name">
             </div>	
             <div class="form">
				<h5>Company Adress</h5>
				<input class="search-field" type="text" name="company_address" placeholder="Company Adress">
             </div>	
             <div class="form">
				<h5>Company City</h5>
				
				<select class="form-control" name="company_city">
					<option>Select</option>
					<option>Indore</option>
					<option>Ujjain</option>
					<option>Bhopal</option>
					<option>Kota</option>
				</select>
             </div>	
             <div class="form">
				<h5>Company person name</h5>
				<input class="search-field" type="text"  name="company_person" placeholder="Company person name">
             </div>	
             <div class="form">
				<h5>Username</h5>
				<input class="search-field" type="text" placeholder="username" name="username">
             </div>	
             <div class="form">
				<h5>Email</h5>
				<input class="search-field" type="text" placeholder="email" name="company_email">
             </div>
              <div class="form">
				<h5>Password</h5>
				<input class="search-field" type="password" placeholder="password" name="password">
             </div>
             <div class="form">
				<h5>Re-Password</h5>
				<input class="search-field" type="password" placeholder="re-password" name="re_password">
             </div>

             <input type="submit" name="submit" class="button">
</form>	

</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<?php
include("common_info/footer.php");
?>