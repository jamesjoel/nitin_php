<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$first = array("name"=>"rohit", "age"=>25, "city"=>"indore");
		$second = array("name"=>"nitin", "age"=>21, "city"=>"bhopal");
		$third = array("name"=>"parul", "age"=>27, "city"=>"ujjain");
		$fourth = array("name"=>"james", "age"=>30, "city"=>"mhow");



		$data = array($first, $second, $third, $fourth); // simple array and multi


		
	?>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-priamry table-bordered table-stripped">
				<tr>
					<th>S.No.</th>
					<th>Name</th>
					<th>Age</th>
					<th>City</th>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo $data[0]["name"] ?></td>
					<td><?php echo $data[0]["age"] ?></td>
					<td><?php echo $data[0]["city"] ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo $data[1]["name"] ?></td>
					<td><?php echo $data[1]["age"] ?></td>
					<td><?php echo $data[1]["city"] ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo $data[2]["name"] ?></td>
					<td><?php echo $data[2]["age"] ?></td>
					<td><?php echo $data[2]["city"] ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo $data[3]["name"] ?></td>
					<td><?php echo $data[3]["age"] ?></td>
					<td><?php echo $data[3]["city"] ?></td>
				</tr>



			</table>
		</div>
	</div>

	



</body>
</html>
