<?php

$email=$_POST['email'];
$user=$_POST['username'];
$pass=$_POST['password'];
$phone=$_POST['phone'];

$server="localhost";
$username="root";
$password="";
$database="cinemas";

$con=new mysqli($server,$username,$password,$database);

$sql="INSERT INTO users(Email,Username,Password,Phone) VALUES('$email','$user','$pass','$phone')";

if($con->query($sql)===TRUE)
{
		header("Location: http://localhost/PPX/welcome.html");
		exit();
	
}	
else
{
		echo"Not Recorded";
}

	


$con->close();


?>