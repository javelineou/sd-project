<?php
	include("../connection.php");
	
	$student_id = $_GET['student_id'];
	$query = "DELETE FROM student WHERE student_id= '$student_id'";
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