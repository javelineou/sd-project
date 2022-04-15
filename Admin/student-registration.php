<?php
	include("../config.php");

	// Starting session
	// session_start();

	// Check if user is whether or not an admin
	// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	// header("location: ../logged-homepage.php");
	// exit;
	// }
?>


<!DOCTYPE html>

<html>
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Bootstrap CSS -->
		<link
		  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
		  crossorigin="anonymous"
		/>
		<script
		  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		  crossorigin="anonymous"
		></script>
		<!-- Bootstrap Icon Lib-->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
		/>
		<link rel="stylesheet" type="text/css" href="../registrations1.css" >
		<title> Student Registration </title>   
	</head>
	
	    <!-- Header -->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="homepage.html">
          <img
            src="../img/fcuc-sc.png"
            width="50"
            height="50"
            alt="FCUC Student Council Logo"
          />
        </a>
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list"></i>
        </button>

        <!-- Collapsible wrapper -->
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Button on Navbar -->
          <a href="system_login_selection_page.html"><button
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width">
            Logout
          </button></a>
        </div>
       <!-- Collapsible wrapper --> 
         </div>
      <!-- Container wrapper -->
    </nav>
  </header>


<style>
	.btn-3
	{
		width: 300px;
		height:300px;
		color:white;
		background-color:#C63F60;
		letter-spacing:5px;
		font-size:25px;
		font-family:sans-serif;
		border-radius: 12px;
		box-shadow:inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
		transition:transform 0.5s;
	}
	.btn-3:hover
	{
		color:black;
		transform:translateY(-10px);
	}
	
</style>
  
  
  
	<body>
		<div class="container"> 
		<form action="#" method="POST" >
			<div class="title">
				Registration Form
			</div>
			<div class="form">
				<div class="input_field">
					<label>  Name </label>
					<input type="text" class="input" name="name" required>
				</div>
				
				<div class="input_field">
					<label> Student ID </label>
					<input type="text" class="input" name="student_id" required>
				</div>
				
				<div class="input_field">
					<label> Password </label>
					<input type="password" class="input" name="password" required>
				</div>
				
				<div class="input_field">
					<label> Level </label>
					<select class="selectbox" name="level_of_study" required>
						<option value=""> - select - </option>
						<option value="Foundation"> Foundation </option>
						<option value="Diploma">Diploma</option>
						<option value="Degree"> Degree</option>
						<option value="Masters">Masters</option>
					</select>
				</div>
				
				<div class="input_field">
					<label> Faculty </label>
					<select class="selectbox" name="faculty" required>
						<option value=""> - Select - </option>
						<option value="Faculty of Engineering and Computing"> Faculty of Engineering and Computing</option>
						<option value="Faculty of Arts"> Faculty of Arts</option>
						<option value="Faculty of Business"> Faculty of Business</option>
					</select>
				</div>
				
				<div class="input_field">
					<label> Year </label>
					<select class="selectbox" name="year" required>
						<option value=""> - Select - </option>
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
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
					<input type="submit" value="Register" class="btn" name="submit">
				</div>
			</div>
		</form>	
		</div>	
	</body>
	
	
	  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-auto">
    <!-- Section Social media -->
    <section class="mb-2 text-center">
      <a
        class="btn btn-outline-dark btn-floating m-1"
        href="https://www.facebook.com/firstcityUC/"
        role="button"
        ><i class="bi bi-facebook"></i
      ></a>
      <a
        class="btn btn-outline-dark btn-floating m-1"
        href="https://www.instagram.com/firstcity.uc/"
        role="button"
        ><i class="bi bi-instagram"></i
      ></a>
      <a
        class="btn btn-outline-dark btn-floating m-1"
        href="https://firstcity.edu.my/"
        role="button"
        ><i class="bi bi-globe"></i
      ></a>
    </section>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      ©2022 Copyright
      <a class="text-dark" href="https://firstcity.edu.my/"
        >First City University College</a
      >
    </div>
  </footer>

</html>


<?php
	
	if(isset($_POST['submit']))
	{
		$name 				= $_POST['name'];
		$student_id 		= $_POST['student_id'];
		$password 			= $_POST['password'];
		$level_of_study 	= $_POST['level_of_study'];
		$faculty 			= $_POST['faculty'];
		$year 				= $_POST['year'];
		$status				= $_POST['status'];
		$vote_status		= $_POST['vote_status'];
	
	
		$query = "INSERT INTO student VALUES('$name', '$student_id', '$faculty', '$year', '$password', '$level_of_study', '$status', '$vote_status')";
		
		$data = mysqli_query($conn, $query );
		
		if($data)
		{
			echo "<script>alert('Data inserted successfuly')</script>";
		}
		else
		{
			echo "Data inserted unsuccessful";
		}
	}
?>
























