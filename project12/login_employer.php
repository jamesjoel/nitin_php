<?php
include("common_info/db.php");
include("common_info/header.php");
?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2>Employee login</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<form action="employer_auth.php" method="post">
				
			<!-- Location -->
			<div class="form">
				<h5>Username/Email Address</h5>
				<input class="search-field" type="text" name="username" placeholder="username"/>
				
			</div>

			<!-- Job Type -->
			
           <div class="form">
				<h5>Password</h5>
				<input  type="password" placeholder="password" name="password">
				
			</div>

			<input type="submit" value="Login" class="button big margin-top-5"/>

			<p class="text-danger">
				<?php
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}

				?>
			</p>

			</form>

		</div>
	</div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<?php
include("common_info/footer.php");
?>