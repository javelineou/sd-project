	<?php
	
	session_start();
	  
    //connect to database
    include ("config.php");
	
	
	$vote_count  	= $_POST['vote_count'];
	$total_votes 	= $vote_count + 1;
	$candidate_id	= $_POST['candidate_id'];
	$student_id		= $_SESSION['student_id'];
	
	//update the vote count when vote button is pressed
	$vote_count_update = mysqli_query($connect, "UPDATE vote SET vote_count='$total_votes' where candidate_id='candidate_id' ");
	
	//update user vote status
	$user_vote_status_update = mysqli_query($connect, "UPDATE student SET vote_status=1 where student_id='student_id' ");
	
	if($update_status and $update_votes)
	{
		
        $getCandidate = mysqli_query($connect, "select candidate_name, photo, vote_count, candidate_id from candidate");
		
        $candidate = mysqli_fetch_all($getCandidate, MYSQLI_ASSOC);
        $_SESSION['candidate'] = $candidate;
        $_SESSION['vote_status'] = 1;
		
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "logged-homepage.php";
                </script>';
    }
    else
	{
		
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "logged-homepage.php";
                </script>';
    }

	
	
	
	
?>