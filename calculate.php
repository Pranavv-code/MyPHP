<?php

$a=$_POST['fn'];
$b=$_POST['sn'];
$c=$_POST['tn'];

if($a>$b && $a>$c)
{
	echo"The greatest number is:-".$a;
	
}
else if($b>$c)
{
	echo"The greatest number is:-".$b;
}
else{
	echo"The greatest number is:-".$c;
}









?>