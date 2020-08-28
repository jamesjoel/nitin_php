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
	$password       =  $_POST['password'];
	$re_password    =  $_POST['re_password'];


	// Insert Query

	$query =  "INSERT INTO employer( company_name, company_address, company_city, company_person, username, email, password, re_password)  VALUES('$company_name' , '$company_address' ,'$company_city' ,
'$company_person' ,'$username' , '$company_email' ,'$password' ,'$re_password')";

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

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/stacktable.js"></script>



</body>
</html>