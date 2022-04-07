<?php
	include("../connection.php");
	
	$Sid = $_GET['Sid'];
	$query = "SELECT * FROM student where Sid= '$Sid'";
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
					<input type="text" value="<?php echo $result['Sname'];?>" class="input" name="Sname" required>
				</div>
				
				<div class="input_field">
					<label> Student ID </label>
					<input type="text" value="<?php echo $result['Sid'];?>" class="input" name="Sid" required>
				</div>
				
				<div class="input_field">
					<label> password </label>
					<input type="text" value="<?php echo $result['Spass'];?>" class="input" name="Spass" required>
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
					<select class="selectbox" name="Sfaculty" required>
						<option value=""> - Select - </option>
						<option value="Faculty of Engineering and Computing"
						<?php
							if($result['Sfaculty'] == 'Faculty of Engineering and Computing')
							{
								echo "selected";
							}
						?>
						> Faculty of Engineering and Computing</option>
						<option value="Faculty of Arts"
						<?php
							if($result['Sfaculty'] == 'Faculty of Arts')
							{
								echo "selected";
							}
						?>
						> Faculty of Arts</option>
						<option value="Faculty of Business"
						<?php
							if($result['Sfaculty'] == 'Faculty of Business')
							{
								echo "selected";
							}
						?>
						> Faculty of Business</option>
					</select>
				</div>
				
				<div class="input_field">
					<label> Year </label>
					<select class="selectbox" name="Syear" required>
						<option value=""> - Select - </option>
						<option value="1"
						<?php
							if($result['Syear'] == '1')
							{
								echo "selected";
							}
						?>
						> 1 </option>
						<option value="2"
						<?php
							if($result['Syear'] == '2')
							{
								echo "selected";
							}
						?>
						> 2 </option>
						<option value="3"
						<?php
							if($result['Syear'] == '3')
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
		$Sname 				= $_POST['Sname'];
		$Sid 				= $_POST['Sid'];
		$Spass 				= $_POST['Spass'];
		$level_of_study 	= $_POST['level_of_study'];
		$Sfaculty 			= $_POST['Sfaculty'];
		$Syear 				= $_POST['Syear'];
		$status				= $_POST['status'];
		$vote_status		= $_POST['vote_status'];
	
	
		$query = "UPDATE student set Sname='$Sname', Sid='$Sid', Spass='$Spass', level_of_study='$level_of_study', Sfaculty='$Sfaculty', Syear='$Syear', status='$status', vote_status='$vote_status' WHERE Sid='$Sid' ";
		
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
























