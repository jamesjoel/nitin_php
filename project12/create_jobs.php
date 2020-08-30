<?php
include("common_info/db.php");

if(! isset($_SESSION['is_company_logged_in']))
{
	header("location:index.php");
}


include("common_info/header.php");
?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	
		<h2>Create Your Jobs</h2>
		<a href="all_jobs.php">All Jobs</a>
		<div class="container">
		<div class="sixteen columns employee_register">	

		<form method="post" action="save_jobs.php">	

		              <div class="form">
						<h5>Job Title</h5>
						<input class="search-field" type="text" name="job_title" placeholder="Job Title">
		             </div>	
		             <div class="form">
						<h5>Job Adress</h5>
						<input class="search-field" type="text" name="job_address" placeholder="Company Job Adress">
		             </div>	
		             <div class="form">
						<h5>Job Location</h5>
						
						<select class="form-control" name="job_location">
							<option>Select</option>
							<option>Indore</option>
							<option>Ujjain</option>
							<option>Bhopal</option>
							<option>Kota</option>
						</select>
		             </div>	
		             <div class="form">
						<h5>Job Type</h5>
						<select class="form-control" name="job_type">
							<option>Select</option>
							<option>Full-Time</option>
							<option>Part-Time</option>
							<option>Internship</option>
							<option>Temporary</option>
						</select>
		             </div>	
		             <div class="form">
						<h5>Job Description</h5>
						<textarea class="form-control" name="desc" placeholder="Job Description"></textarea>
		             </div>	

		             <div class="form">
						<h5>Salary</h5>
						<input class="search-field" type="text" placeholder="Salary" name="salary">
		             </div>	
		             

		             <input type="submit" name="Add" class="button">
		</form>	

		</div>
		</div>
		
	</div>
</div>



<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

<?php
include("common_info/footer.php");
?>