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

	<div class="my-account" style="min-height: 600px;">

		<h2>Your Company Dashboard</h2>	

		<h4>Welcome : <?php echo $_SESSION['name'] ?></h4>	

	</div>
</div>



<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

<?php
include("common_info/footer.php");
?>