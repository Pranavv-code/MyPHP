<?php


//accepting the values from the form

$id=$_POST['id'];
$name=$_POST['pro'];
$quantity=$_POST['quan'];

//defining connection parameters
$server="localhost";
$username="root";
$password="";
$database="pranavv";

//connecting

$con=new mysqli($server,$username,$password,$database);

$sql="INSERT INTO inventory(ID,Name,Quantity) VALUES('$id','$name','$quantity')";

if($con->query($sql)===TRUE)
{
	echo"Recorded";
}
ELSE
{
	echo"Not recorded";
}

$sqlfetch="select * from inventory";
$result=$con->query($sqlfetch);

if($result->num_rows>0)
{
	echo"<br>The query is executed";
	echo"<table border=1>";
	while($row=$result->fetch_assoc())
	{
		echo"<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Quantity"]."</td></tr>";
	}
	echo"</table>";
}
ELSE
{
	echo"The query is not executed";
}

$con->close();
?>
