<?php
	
	//connection to database
	include("../config.php");
	
	// Starting session
	session_start();
	
	//Check if user is whether or not an admin
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	header("location: ../logged-homepage.php");
	exit;
	}
	
	
	
	$query1 = "SELECT * FROM vote";
	$data1  = mysqli_query($conn, $query1);
	$total = mysqli_num_rows($data1);
	
	if(isset($_POST['submit']))
	{
		if($total != 0)
		{
				$query2 = "UPDATE vote SET vote_count = 0 WHERE vote_count >= 1";
				$data2  = mysqli_query($conn, $query2);
		}
		
		if($data2)
		{
			echo "<script>alert('Success!')</script>";
			
			?>
		
				<meta http-equiv = "refresh" content="0; url=http://localhost/sd-project/Admin/candidates.php" />
			
			<?php
		
		}
   else
		{
			echo "Failed to update";
		}
	}
	else
	{
		echo "No records found in the database";
	}
?>
























