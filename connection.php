<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "voting_system";
	
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	
	if($conn)
	{
		/* echo "Connection OK"; */
	}
	else
	{
		echo "Connection FAILED";
	}
	
	
	
	
?>