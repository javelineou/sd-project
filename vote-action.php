<?php
    //connect to database
    include ("config.php");
	 session_start();
	 
	 
	if(isset($_POST['submit']))
	{
		$student_id         = $_SESSION['student_id'];
		$candidate_id 		= $_POST['candidate_id'];
	
	
		$sql = " UPDATE student SET vote_status = 1 WHERE student_id='$student_id' ";		
		$query2 = " UPDATE vote SET vote_count=vote_count + 1 WHERE candidate_id ='$candidate_id' ";
		
		$data1 = mysqli_query($conn, $query2 );
		$data2 = mysqli_query($conn, $sql );
		
		if($data1 && $data2)
		{
			echo '<script>
						alert("Voting successfull!");
						window.location = "thankyou.php";
					</script>';
		
		}
		else
		{
			echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "homepage.php";
                </script>';
		}
	}
?>



			
