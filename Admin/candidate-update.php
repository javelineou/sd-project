<?php
	include("../config.php");

	// Starting session
	 session_start();

	// Check if user is whether or not an admin
	 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	 header("location: ../logged-homepage.php");
	 exit;
	}
	$candidate_id = $_GET['candidate_id'];
	$query = "SELECT * FROM vote where candidate_id= '$candidate_id'";
	$data  = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);
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
		
		<link rel="stylesheet" type="text/css" href="../registration.css" >
		<title> Update student </title>
	
	</head>

	
	<!--Navigation bar-->
  	
	<header>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!--logo-->
			<a class="navbar-brand" href="../admin-selection.php">
				<img
				src="../img/fcuc-sc.png"
				width="140px"
            	height="55"
				alt="FCUC Student Council Logo"
				 />
		  	</a>
			<!--burger menu-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				    <!--homepage link-->
					<li class="nav-item">
					  <a class="nav-link	" aria-current="page" href="../admin-homepage.php">Home</a>
					</li>
				  </ul>
				  			
				   	<a href="candidates.php" type="button"
            		class="btn btn-outline-primary me-3 shadow-sm btn-width">Back</a>
				  
				</div>
	  </div>
	  </nav>
	
	</header>
  <!--EOF Navigation bar-->
  
	
	<body>
		<div class="container"> 
		<form action="#" method="POST">
			<div class="title"> 
			
				Update Candidate Details
				
			</div>
			<div class="form"> 
			
				<div class="input_field">
					<label>  candidate ID </label>
					<input type="text" value="<?php echo $result['candidate_id'];?>" class="input" name="candidate_id" required>
				</div>
				
				<div class="input_field">
					<label> Candidate Name </label>
					<input type="text" value="<?php echo $result['candidate_name'];?>" class="input" name="candidate_name" required>
				</div>
				
				<div class="input_field">
					<input type="submit" value="Update Details" class="btn" name="update">
				</div>
				
				
			</div>
		</form>	
		</div>	
	</body>
	</br></br></br>
	</br></br></br>
  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start pt-2">
    <!-- Section Social media -->
    <section class="mt-4 text-center">
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
    <div class="text-center p-3">
      ©2022 Copyright
      <a class="text-dark" href="https://firstcity.edu.my/"
        >First City University College</a
      >
    </div>
  </footer>
  <!-- EOF Footer -->
	
</html>


<?php
	
	if(isset($_POST['update']))
	{
		$candidate_id 		= $_POST['candidate_id'];
		$candidate_name 	= $_POST['candidate_name'];
	
	
	
		$query = "UPDATE vote set candidate_id='$candidate_id', candidate_name='$candidate_name' WHERE candidate_id='$candidate_id' ";
				
		$data = mysqli_query($conn, $query );
		
		if($data)
		{
			echo "<script>alert('Record Updated')</script>";
			
			?>
		
				<meta http-equiv = "refresh" content="0; url=http://localhost/sd-project/Admin/candidates.php" />
			
			<?php
		
		}
		else
		{
			echo "Failed to update";
		}
	}
?>
























