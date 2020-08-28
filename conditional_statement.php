<?php
// ================ Conditional Statements ================
/*

	1. if()
	2. if().....else
	3. if().... elseif().... elseif()....elseif()....else
	4. switch.........case

*/

$a = 5;
$b = 10;

$c = $a+$b;
$x=true;

if($c > 20 || $x == true)
{
	//echo "yes";
}
else
{
	//echo "no";
}



$a = 81;

if($a<40)
{
	echo 'fail';
}
elseif($a>40 && $a<=60)
{
	echo 'second division';
}
elseif($a>60 && $a<=80)
{
	echo "first division";
}
elseif($a>80)
{
	echo "excelent";
}



?>