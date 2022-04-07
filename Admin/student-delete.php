<?php
	include("../connection.php");
	
	$Sid = $_GET['Sid'];
	$query = "DELETE FROM student WHERE Sid= '$Sid'";
	$data  = mysqli_query($conn, $query);
	
	if($data)
		{
			/* echo "<script>alert('Record Deleted')</script>"; */
			echo "Record deleted";
			
			?>
		
				<meta http-equiv = "refresh" content="0; url=http://localhost/sd-project/Admin/student-display.php" />
			
			<?php
		
		}
   else
		{
			echo "Failed to update";
		}
?>