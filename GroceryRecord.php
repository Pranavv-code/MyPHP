<?php


$pro=$_POST['pro'];
$quan=$_POST['quan'];
$per=$_POST['quan'];
$tot=$_POST['total'];

$server="localhost";
$username="root";
$password="";
$database="Pranavv";


$con=new mysqli($server,$username,$password,$database);

$sql="INSERT INTO grocery(Product,Quantity,Per,Total) VALUES('$pro','$quan','$per','$tot')";


if($con->query($sql)===TRUE)
{
	echo"Recorded";

}
else
{
	echo"Not Recorded";

}

$sqlfetch="select * from Grocery";


$result=$con->query($sqlfetch);


if($result->num_rows>0)
	
	{
		while($row=$result->fetch_assoc())
		{
			echo "<table>";
			echo "<tr><td>".$row["Product"]."</td><td>".$row["Quantity"]."</td><td>".$row["Per"]."</td><td>".$row["Total"]."</td></tr>";
			echo"</table";
		}
	}

$con->close();



?>