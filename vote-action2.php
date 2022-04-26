<?php
    //connect to database
    include ("config.php");
	 session_start();
	 
	 
	if(isset($_POST['candidate_A']))
	{
		$student_id         = $_SESSION['student_id'];
		$candidate_id 		= "B1111";
	
	
		$query1 = " UPDATE student SET vote_status = 1 WHERE student_id='$student_id' ";		
		$query2 = " UPDATE vote SET vote_count=vote_count + 1 WHERE candidate_id ='$candidate_id' ";
		
		$data1 = mysqli_query($conn, $query1);
		$data2 = mysqli_query($conn, $query2);
		
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

	else if(isset($_POST['candidate_B'])){
		$student_id         = $_SESSION['student_id'];
		$candidate_id 		= "B2222";

		$query1 = " UPDATE student SET vote_status = 1 WHERE student_id='$student_id' ";		
		$query2 = " UPDATE vote SET vote_count=vote_count + 1 WHERE candidate_id ='$candidate_id' ";
		
		$data1 = mysqli_query($conn, $query1);
		$data2 = mysqli_query($conn, $query2);
		
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

	else if(isset($_POST['candidate_C'])){
		$student_id         = $_SESSION['student_id'];
		$candidate_id 		= "B3333";

		$query1 = " UPDATE student SET vote_status = 1 WHERE student_id='$student_id' ";		
		$query2 = " UPDATE vote SET vote_count=vote_count + 1 WHERE candidate_id ='$candidate_id' ";
		
		$data1 = mysqli_query($conn, $query1);
		$data2 = mysqli_query($conn, $query2);
		
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



			
