<?php
	include("../config.php");

	// Starting session
	session_start();

	//Check if user is whether or not an admin
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	header("location: ../logged-homepage.php");
	exit;
	}
	
	$id = $_GET['id'];
	$query = "DELETE FROM contact WHERE id= '$id'";
	$data  = mysqli_query($conn, $query);
	
	if($data)
		{
			echo "<script>alert('Record Deleted')</script>";
			
			?>
		
				<meta http-equiv = "refresh" content="0; url=http://localhost/sd-project/Admin/report-display.php" />
			
			<?php
		
		}
   else
		{
			echo "Failed to update";
		}
?>