<?php
include("common_info/db.php");
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

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Login</h3>

				<form method="post" action="auth.php" class="login">

					
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
						<input type="text" class="input-text" name="username" id="username" value="" />
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
						<input class="input-text" type="password" name="password" id="password" />
					</p>
					<p class="text-danger text-center">
						<?php
						if(isset($_SESSION['msg']))
						{

							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
					</p>
					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						
					</p>

					

					
				</form>
			</div>

				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form method="post" action="save.php" class="register">
						<p class="form-row form-row-wide">
							<label for="full_name">Full Name:</label>
							<input type="text" class="input-text" name="full_name" id="full_name" value="" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
							<input type="email" class="input-text" name="email" id="reg_email" value="" />
						</p>

						
						<p class="form-row form-row-wide">
							<label for="reg_password">Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Repeat Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password2" />
						</p>
						<p class="form-row form-row-wide">
							<label for="address">Addresss:</label>
							<textarea id="address" name="address"></textarea>
						</p>
						<p class="form-row form-row-wide">
							<label for="city">City:</label>
							<select id="city" class="form-control" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Mumbai</option>
								<option>Pune</option>
								<option>Delhi</option>
							</select>
						</p>
						<p class="form-row form-row-wide">
							<label>Gender:</label>
							Male<input type="radio" name="gender" value="male">
							Female<input type="radio" name="gender" value="female">
						</p>

									
						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>
						
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