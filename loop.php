<?php
// when we want similer code run multipal time then we can use LOOP
// there are 4 type of Loop in PHP
/*
	1. for
	2. while
	3. do...while
	4. foreach



for($i=1; $i<=10; $i++)
{
	
}




$i = 1;


while($i<=10)
{
	

	$i++;
}











*/

/*
for($i=1; $i<=10; $i++)
{
	echo $i*5;
	echo '<Br />';
}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" cellpadding="5">
	<?php
	for($i=1; $i<=10; $i++)
	{
		echo "<tr>";
		echo "<td>";
		echo $i*5;
		echo "</td>";
		echo "</tr>";
	}

	?>
</table>


<table border="1" align="center" cellpadding="5">
	<?php
	$i=1;
	while($i<=10)
	{
		echo "<tr>";
		echo "<td>";
		echo $i*10;
		echo "</td>";
		echo "</tr>";
		$i++;
	}

	?>
</table>



</body>
</html>