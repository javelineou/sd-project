<?php
	include("../config.php");

	// Starting session
	// session_start();

	// Check if user is whether or not an admin
	// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	// header("location: ../logged-homepage.php");
	// exit;
	// }
	
	$student_id = $_GET['student_id'];
	$query = "SELECT * FROM student where student_id= '$student_id'";
	$data  = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>

<html>
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../registrations1.css" >
		<title> Update student </title>
	
	</head>
	
	<body>
		<div class="container"> 
		<form action="#" method="POST">
			<div class="title"> 
			
				Update Student Details
				
			</div>
			<div class="form"> 
			
				<div class="input_field">
					<label>  Name </label>
					<input type="text" value="<?php echo $result['name'];?>" class="input" name="name" required>
				</div>
				
				<div class="input_field">
					<label> Student ID </label>
					<input type="text" value="<?php echo $result['student_id'];?>" class="input" name="student_id" required>
				</div>
				
				<div class="input_field">
					<label> password </label>
					<input type="text" value="<?php echo $result['password'];?>" class="input" name="password" required>
				</div>
				
				<div class="input_field">
					<label> Level </label>
					<select class="selectbox" name="level_of_study" required>
						<option value=""> - select - </option>
						<option value="Foundation"
						
						<?php
							if($result['level_of_study'] == 'Foundation')
							{
								echo "selected";
							}
						?>
						
						> Foundation </option>
						<option value="Diploma"
						<?php
							if($result['level_of_study'] == 'Diploma')
							{
								echo "selected";
							}
						?>
						
						>Diploma</option>
						<option value="Degree"
						<?php
							if($result['level_of_study'] == 'Degree')
							{
								echo "selected";
							}
						?>
						> Degree</option>
						<option value="Masters"
						<?php
							if($result['level_of_study'] == 'Masters')
							{
								echo "selected";
							}
						?>
						>Masters</option>
					</select>
				</div>
				
				<div class="input_field">
					<label> Faculty </label>
					<select class="selectbox" name="faculty" required>
						<option value=""> - Select - </option>
						<option value="Faculty of Engineering and Computing"
						<?php
							if($result['faculty'] == 'Faculty of Engineering and Computing')
							{
								echo "selected";
							}
						?>
						> Faculty of Engineering and Computing</option>
						<option value="Faculty of Arts"
						<?php
							if($result['faculty'] == 'Faculty of Arts')
							{
								echo "selected";
							}
						?>
						> Faculty of Arts</option>
						<option value="Faculty of Business"
						<?php
							if($result['faculty'] == 'Faculty of Business')
							{
								echo "selected";
							}
						?>
						> Faculty of Business</option>
					</select>
				</div>
				
				<div class="input_field">
					<label> Year </label>
					<select class="selectbox" name="year" required>
						<option value=""> - Select - </option>
						<option value="1"
						<?php
							if($result['year'] == '1')
							{
								echo "selected";
							}
						?>
						> 1 </option>
						<option value="2"
						<?php
							if($result['year'] == '2')
							{
								echo "selected";
							}
						?>
						> 2 </option>
						<option value="3"
						<?php
							if($result['year'] == '3')
							{
								echo "selected";
							}
						?>
						> 3 </option>
					</select>
				</div>
				<div class="input_field">
					<label> Status </label>
					<select class="selectbox" name="status">
						<option value="student"> - Default - </option>
					</select>
				</div>
				<div class="input_field">
					<label> Vote Status </label>
					<select class="selectbox" name="vote_status">
						<option value="0"> - Default - </option>
					</select>
				</div>
				
				<div class="input_field">
					<input type="submit" value="Update Details" class="btn" name="update">
				</div>
				
				
			</div>
		</form>	
		</div>	
	</body>
	
</html>


<?php
	
	if(isset($_POST['update']))
	{
		$name 				= $_POST['name'];
		$student_id 		= $_POST['student_id'];
		$password 				= $_POST['password'];
		$level_of_study 	= $_POST['level_of_study'];
		$faculty 			= $_POST['faculty'];
		$year 				= $_POST['year'];
		$status				= $_POST['status'];
		$vote_status		= $_POST['vote_status'];
	
	
		$query = "UPDATE student set name='$name', student_id='$student_id', password='$password', level_of_study='$level_of_study', faculty='$faculty', year='$year', status='$status', vote_status='$vote_status' WHERE student_id='$student_id' ";
		
		$data = mysqli_query($conn, $query );
		
		if($data)
		{
			echo "<script>alert('Record Updated')</script>";
			
			?>
		
				<meta http-equiv = "refresh" content="0; url=http://localhost/sd-project/Admin/student-display.php" />
			
			<?php
		
		}
		else
		{
			echo "Failed to update";
		}
	}
?>
























