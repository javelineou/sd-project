<?php
	
    //connect to database
    include ("config.php");
	
	if(isset($_POST['submit']))
	{
		$student_id         = $_GET['student_id'];
		//$name 				= $_SESSION['student_id'];
		$candidate_id 		= $_POST['candidate_id'];
		$total_votes 		= $vote_count + 1;
	
	
		//$sql = " UPDATE student SET vote_status = 1 WHERE student_id='$student_id' ";
		//$result = mysql_query($sql) or die(mysql_error());
	
		
		$query2 = " UPDATE vote SET vote_count=vote_count + 1 WHERE candidate_id ='$candidate_id' ";
		
		$data = mysqli_query($conn, $query2 );
		
		if($data)
		{
			echo '<script>
						alert("Voting successfull!");
						window.location = "homepage.php";
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



			
