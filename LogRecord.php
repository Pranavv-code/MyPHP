<?php
$user=$_POST['username'];
$pass=$_POST['password'];


$server="localhost";
$username="root";
$password="";
$database="cinemas";

$con=new mysqli($server,$username,$password,$database);

$sql="SELECT Username,Password FROM users WHERE Username='$user'";

$result=$con->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	
	{
		
		if($row['Username']==$user && $row['Password']==$pass)
		{
			header("Location: http://localhost/PPX/Main.html");
			exit();
			
			
		}
		
		else
			
			{
				echo'
				<script type="text/javascript">
				
				function error()
					{
						alert("Incorrect Username/Password");
						window.location.href="http://localhost/PPX/LogIn.html";
						
						
					}
					
					error();
				
				
				</script>';
				break;
				
			}
		
	
	}

}
else
{
	echo"Zero results";

}



$con->close();


?>