<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Work Scout</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
</head>
<body>
<div id="wrapper">

<header>
<div class="container">
	<div class="sixteen columns">
	
		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.php" id="current">Home</a>
					
				</li>

				

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="add-resume.php">Add Resume</a></li>
						<li><a href="job-alerts.php">Job Alerts</a></li>
					</ul>
				</li>
				<?php
				if(isset($_SESSION['is_company_logged_in']))
				{ ?>
					<li><a href="#"><?php echo $_SESSION['username'] ?></a>
						<ul>
							<li><a href="employer_dashboard.php">Employer Dashboard</a></li>
							<li><a href="create_jobs.php">Jobs</a></li>
							<li><a href="all_jobs.php">All Jobs</a></li>
							<li><a href="logout.php">Employer Logout</a></li>
						</ul>
					</li>
				<?php }else{ ?>

					<li><a href="#">For Employers</a>
						<ul>
							<li><a href="login_employer.php">Employer Login</a></li>
							<li><a href="register_employer.php">Employer Register</a></li>
						</ul>
					</li>

				<?php }
				?>

			</ul>


			<ul class="float-right">
				<?php
				if(isset($_SESSION['is_employee_logged_in']))
				{ ?>
					<li><a href="profile"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="dashboard.php"><i class="fa fa-lock"></i> Dashboard</a></li>
					<li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
				<?php } 
				else
				{ ?>
					<li><a href="login.php#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
					<li><a href="login.php"><i class="fa fa-lock"></i> Log In</a></li>
				<?php
				}
				?>
				
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
