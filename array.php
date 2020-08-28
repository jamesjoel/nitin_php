<!--

		=============== Array in PHP ================
			An Array can store multipal values in a Single Variable

		$a = array();

		$a[] = "nitin";
		$a[] = "james";
		$a[] = 100;
	
		There are 3 types of Array in PHP
			1. Simple Array / Index Array
			2. Associative Array
			3. Multi Dimenctional Array



 -->
<?php

// ============================== Simple Array ==================
$a = array();

$a[] = "nitin"; // -----0    -------------- Index Key

$a[] = "james"; // --------1

$a[] = 100; //---------2

$a[]="gaurav"; //----------3

$a[]="nidhi"; //----------4

$a[]="jaya"; //---------5

// print_r($a);

// echo $a[3];


$b = array("indore", "ujjain", "bhopal", "mumbai", "pune");

//echo $b[3];




// ============================== Associative Array ==================

$x = array();
$x['first']="rohit";   //--------------- 'first' is Associative Key
$x['second']="james";
$x['third']="nitin";
$x["fourth"]="nidhi";

// echo $x['third'];
// print_r($x);

$y = array("name"=>"rohit", "city"=>"indore", "age"=>25, "gender"=>"male");
// print_r($y);

// print_r($_SERVER);
// echo $_SERVER['PHP_SELF'];

// ============================== Multideimenctional Array ==================
/*
	An array can have own array, called multi dim array

*/

$color = array("red", "green", "blue"); // simple array

$hobby = array("cricket", "music", "football"); // simple array

$data = array("a"=>$color, "b"=>$hobby); // asso array

// print_r($data);
echo $data['a'][1];


?>