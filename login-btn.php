<?php

	session_start();
	
	//initializing variables
	$adminId = "";
	$password = "";
	$errors = array();
	
	//connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'voting_system');
	
	//check the database has successfully connected or not
	if(mysqli_connect_error())
	{
		echo "<p> Error in connection to database.</p>";
		exit();
	}
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset ($_POST["login-btn"]))
		{
			session_destroy();
			header ("location:admin-selection.html");
			exit();
		}
		
		//if(isset($_POST('login'))){
			//receive all input values from the form
			$studentId = mysqli_real_escape_string($db, $_POST('studentId'));
			$password = mysqli_real_escape_string($db, $_POST('password'));
			
			echo $studentId;
			echo $password;
			
			//form validation: ensure that the form is correctly filled
			//by adding (array_push()) corresponding errors into $errors array
			//if (empty($studentId))(array_push($errors, "student Id is required");)
			//if (empty($password))(array_push($errors, "Password is required");)			
			
		//}
		
		
		//first check the database to make sure
		//the student id and password is correct
		$user_check_query = "SELECT * FROM admin WHERE studentId='$studentId' OR password='$password' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$student = mysqli_fetch_assoc($result);
		
		if($student){
			if($student('studentId') === $studentId && $student('password') === $password)
				echo "Successfully login";
			else
				echo "Invalid student id or password";
		}
		
		//encrypt the password before saving into the database
		//using for encrypt password
		//$password1 = md5($password);
		
		//$query = "INSERT INTO admin (adminId, password) VALUES ('$adminId', '$password')";
		//mysqli_query($db, $query);
		//$_SESSION('username') = $adminId;
		//$_SESSION('success') = "You are now logged in";
		//header("location:admin-selection.html");
		
		
	}
?>