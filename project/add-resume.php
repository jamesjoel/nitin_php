<?php
include("common_info/header.php");
?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus-circle"></i> Add Resume</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<!-- Notice -->
			<div class="notification notice closeable margin-bottom-40">
				<p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
			</div>


			<!-- Linked In -->
			<div class="form">
				<h5>LinkedIn</h5>
				<a href="#" class="button linkedin-btn">Import from LinkedIn</a>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Name</h5>
				<input class="search-field" type="text" placeholder="Your full name" value=""/>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Email</h5>
				<input class="search-field" type="text" placeholder="mail@example.com" value=""/>
			</div>

			<!-- Title -->
			<div class="form">
				<h5>Professional Title</h5>
				<input class="search-field" type="text" placeholder="e.g. Web Developer" value=""/>
			</div>

			<!-- Location -->
			<div class="form">
				<h5>Location</h5>
				<input class="search-field" type="text" placeholder="e.g. London, UK" value=""/>
			</div>

			<!-- Logo -->
			<div class="form">
				<h5>Photo <span>(optional)</span></h5>
				<label class="upload-btn">
				    <input type="file" multiple />
				    <i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Video <span>(optional)</span></h5>
				<input class="search-field" type="text" placeholder="A link to a video about you" value=""/>
			</div>

			<!-- Description -->
			<div class="form">
				<h5>Resume Content</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>


			<!-- Add URLs -->
			<div class="form with-line">
				<h5>URL(s) <span>(optional)</span></h5>
				<div class="form-inside">
					
					<!-- Adding URL(s) -->
					<div class="form boxed box-to-clone url-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Name" value=""/>
						<input class="search-field" type="text" placeholder="http://" value=""/>
					</div>

					<a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
					<p class="note">Optionally provide links to any of your websites or social network profiles.</p>
				</div>
			</div>


			<!-- Education -->
			<div class="form with-line">
				<h5>Education <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Add Education -->
					<div class="form boxed box-to-clone education-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="School Name" value=""/>
						<input class="search-field" type="text" placeholder="Qualification(s)" value=""/>
						<input class="search-field" type="text" placeholder="Start / end date" value=""/>
						<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
				</div>
			</div>


			<!-- Experience  -->
			<div class="form with-line">
				<h5>Experience <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Employer" value=""/>
						<input class="search-field" type="text" placeholder="Job Title" value=""/>
						<input class="search-field" type="text" placeholder="Start / end date" value=""/>
						<textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>
				</div>
			</div>


			<div class="divider margin-top-0 padding-reset"></div>
			<a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

		</div>
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


<!-- WYSIWYG Editor -->
<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sceditor.js"></script>



</body>
</html>