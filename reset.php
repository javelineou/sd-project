<?php
	include("config.php");

	//Starting session
	session_start();

	// Check if the user is logged in, otherwise redirect to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
	}

	$student_id = $_SESSION["student_id"];
	$query = "SELECT * FROM student where student_id= '$student_id'";
	$data  = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
	
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
		<link rel="stylesheet" type="text/css" href="registration.css" >
		<title> Student Registration </title>   
	</head>
   
<!-- Header -->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="homepage.php">
          <img
            src="img/fcuc-sc.png"
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
          </ul>
          <!-- Button on Navbar -->
          <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="vote.php"
          >
            Vote
          </a>
          <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="logout.php"
          >
            Logout
          </a>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
  </header>
  <!--EOF Navigation bar-->
	<body>
		<div class="container"> 
		<form action="#" method="POST" >
			<div class="title">
				Reset Password
			</div>
			<div class="form">

				<div class="input_field">
					<label> Student ID</label>
          <!-- <?php echo $student_id;?> -->

          <p class="studentID" style="width:200px;font-size:20px;font-weight:bold;">
          <?php echo $student_id;?>
          </p>

          <!--
					<input type="text" value="<?php echo $student_id;?>" class="studentid" name="student_id" readonly>
					-->
				</div>
				
				<div class="input_field">
					<label> Current Password </label>
					<input type="password" class="input" name="currentPassword" required>
				</div>

				<div class="input_field">
					<label> New Password </label>
					<input type="password" class="input" name="newPassword" required>
				</div>

				<div class="input_field">
					<label> Retype New Password </label>
					<input type="password" class="input" name="reNewPassword" required>
				</div>
				
				<div class="input_field">
					<input type="submit" value="Submit" class="btn" name="submit">
				</div>
			</div>
		</form>	
		</div>	
	</body>
	
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
	
	if(isset($_POST['submit']))
	{
		$dbPassword = $result['password'];
    
    $student_id = $_SESSION['student_id'];

    //$currentPassword 	= $_POST['currentPassword'];
    $currentPassword 	= md5($_POST['currentPassword']);

		//$newPassword 	= $_POST['newPassword'];
    $newPassword 	= md5($_POST['newPassword']);

    //$reNewPassword 	= $_POST['reNewPassword'];
    $reNewPassword 	= md5($_POST['reNewPassword']);

    if($dbPassword === $currentPassword){//check the current password is same as the password in database
      if($newPassword === $reNewPassword){//check the new password and retype new password
        $query = "UPDATE student set password='$newPassword' WHERE student_id='$student_id'";
		    $data = mysqli_query($conn, $query);
		
		    if($data){
			    echo "<script>alert('Password has been changed')</script>";
          header("Location:homepage.php");
		    }
		    else{
			  echo "<script>alert('Password changing unsuccessful')</script>";
		    }
      }
      else{
        echo "<script>alert('New password and retype new password is incorrect')</script>";
      }
    }
    else{//current password is not same as password in database
      echo "<script>alert('Your current password is incorrect')</script>";
    }
    
	}
?>
























