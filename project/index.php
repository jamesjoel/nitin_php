<?php
include("common_info/header.php");
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

			<li class="highlighted"><a href="job-page.html">
				<img src="images/job-list-logo-01.png" alt="">
				<div class="job-list-content">
					<h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $100 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.php">
				<img src="images/job-list-logo-02.png" alt="">
				<div class="job-list-content">
					<h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Cubico</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $50 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.php">
				<img src="images/job-list-logo-03.png" alt="">
				<div class="job-list-content">
					<h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $15 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.php">
				<img src="images/job-list-logo-04.png" alt="">
				<div class="job-list-content">
					<h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Hexagon</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $75 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.php">
				<img src="images/job-list-logo-05.png" alt="">
				<div class="job-list-content">
					<h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Mates</span>
						<span><i class="fa fa-map-marker"></i> New York</span>
						<span><i class="fa fa-money"></i> $115 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
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



</body>
</html>