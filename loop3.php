<?php
// =============== Foreach Loop ================
// this is to use only in array

$data = array("indore", "ujjain", "bhopal", "mhow");

// print_r($data);

foreach($data as $x)
{
	echo $x."<br />";
}

echo "<Hr >";

$data2 = array(
		"name"=>"rohit",
		"age"=>25,
		"city"=>"indore",
		"gender"=>"male",
		"address"=>"tilak nagar"
	);



foreach($data2 as $z => $y)
{
	echo $z." : ".$y."<br />";
}


?>