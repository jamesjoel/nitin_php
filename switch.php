<?php
/*
$a = 3;
if($a==1)
{
	echo "indore";
}
if($a==2)
{
	echo "ujjain";
}
if($a==3)
{
	echo 'bhopal';
}
if($a==4)
{
	echo "mumbai";
}
if($a==5)
{
	echo "pune";
}
*/
$a = 7;

switch($a)
{
	case 1 : echo "indore";
			break;

	case 2 : echo "ujjain";
			break;
	
	case 3 : echo "bhopal";
			break;

	case 4 : echo "mumbai";
			break;

	case 5 : echo "pune";
			break;

	default : echo "no city found";
}

/*



$a = "/";

$x = 50;
$y = 10;

switch($a)
{
	case "+" : echo $x+$y;

	case "-" : echo $x-$y;
	
	case "*" : echo $x*$y;

	case "/" : echo $x/$y;

	
}



*/



?>