<?php
include("common_info/db.php");

if(! isset($_SESSION['is_company_logged_in']))
{
	header("location:index.php");
}


include("common_info/header.php");
$id = $_SESSION['id'];

$query = "SELECT * FROM jobs WHERE employer_id = $id";
$result = mysqli_query($con, $query);



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
<div class="container" style="min-height: 600px;">
	<h2>List of Your Jobs</h2>
	<table class="manage-table">
		<tr>
			<th>S.No.</th>
			<th>Title</th>
			<th>Location</th>
			<th>Salary</th>
			<th>Type</th>
		</tr>
		<?php
		$n=1;
		while($data = mysqli_fetch_assoc($result))
		{ ?>
			<tr>
				<td><?php echo $n; ?></td>
				<td><?php echo $data['job_title']; ?></td>
				<td><?php echo $data['job_location']; ?></td>
				<td><?php echo $data['salary']; ?></td>
				<td><?php echo $data['job_type']; ?></td>
			</tr>
		<?php
		$n++;
		}
		?>
	</table>
</div>



<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

<?php
include("common_info/footer.php");
?>