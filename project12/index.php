<?php
include("common_info/db.php");
include("common_info/header.php");

$query = "SELECT * FROM jobs";
$result = mysqli_query($con, $query);


?>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

				<!-- Form -->
				<h2>Find job</h2>
				<input type="text" class="ico-01" placeholder="job title, keywords or company name" value=""/>
				<input type="text" class="ico-02" placeholder="city, province or region" value=""/>
				<button><i class="fa fa-search"></i></button>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Browse job offers by <a href="browse-categories.php"> category</a> or <a href="#">location</a>
				</div>
				
				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15 000</strong> job offers for you!
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->




<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list">
			<?php
			while($data=mysqli_fetch_assoc($result))
			{
			?>
			<li class="highlighted"><a href="job-page.html">
				<img src="images/job-list-logo-01.png" alt="">
				<div class="job-list-content">
					<h4><?php echo $data['job_title'] ?> <span class="<?php echo strtolower($data['job_type']); ?>"><?php echo $data['job_type']; ?></span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> <?php echo $data['employer_id'] ?></span>
						<span><i class="fa fa-map-marker"></i> <?php echo $data['job_location'] ?></span>
						<span><i class="fa fa-money"></i> $<?php echo $data['salary'] ?> / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
			<?php
			}
			?>

		</ul>

		<a href="browse-jobs.php" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Mates</span>
								<span><i class="fa fa-map-marker"></i> New York</span>
								<span><i class="fa fa-money"></i> $20 / hour</span>
								<p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
								<a href="job-page.php" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> King</span>
								<span><i class="fa fa-map-marker"></i> London</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
								<a href="job-page.php" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Hexagon</span>
								<span><i class="fa fa-map-marker"></i> Sydney</span>
								<span><i class="fa fa-money"></i> $10 / hour</span>
								<p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
								<a href="job-page.php" class="button">Apply For This Job</a>
							</div>
						</li>


					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<!-- Testimonials -->








<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<?php
include("common_info/footer.php");
?>