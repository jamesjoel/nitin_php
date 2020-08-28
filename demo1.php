<!-- 
		=============== Variable in PHP ==================
			variable is a container which can store values/data/inforamtion.

			Rules for Nameing of Varialbes
				1. Variable name could not containing any special char except _ (underscore).
				2. Variable name could not start with number.
				3. Variable name is case-senscitive.





		
				=========== Data-Types in PHP for variables ===========
				1. Intiger (all number +/-)

				2. Float (all decimale number +/-)
				
				3. Boolean (true/false -------- yes/no)

				4. String (all charactors or collections of charachors)
					--- remember the string should be inside "" or ''

				



				5. Array
				6. Object










  -->
<?php
$name = "Nitin";
$age = 25;
$per = 84.25;
$address = "27, tilak nagar";
$city = "indore";
$pin_code = 452001;
$marital_status = "no";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h2>My Information</h2></center>
	<table align="center" border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>Age</th>
			<th>City</th>
			<th>Pin Code</th>
			<th>Marital Status</th>
		</tr>
		<tr>
			<td>1</td>
			<td><?php echo $name; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $city; ?></td>
			<td><?php echo $pin_code; ?></td>
			<td><?php echo $marital_status; ?></td>
		</tr>
	</table>
</body>
</html>