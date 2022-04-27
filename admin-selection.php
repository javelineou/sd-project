<?php 
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
  header("location: login.php");
  exit;
}

// Check if user is not admin, it'll redirect to logged homepage
if($_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
  header("location: logged-homepage.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
   
  <!-- style -->
  <style>
    .btn-3 {
      width: 300px;
      height: 300px;
      color: white;
      background-color: #c63f60;
      letter-spacing: 5px;
      font-size: 25px;
      font-family: sans-serif;
      border-radius: 12px;
      box-shadow: inset 0 -0.6em 1em -0.35em rgba(0, 0, 0, 0.17),
        inset 0 0.6em 2em -0.3em rgba(255, 255, 255, 0.15),
        inset 0 0 0em 0.05em rgba(255, 255, 255, 0.12);
      transition: transform 0.5s;
    }
    .btn-3:hover {
      color: black;
      transform: translateY(-10px);
    }
  </style>

<!--Navigation bar-->
  	
	<header>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!--logo-->
			<a class="navbar-brand" href="admin-selection.php">
				<img
				src="img/fcuc-sc.png"
				width="50"
				height="50"
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
					<li class="nav-item ">
					  <a class="nav-link " aria-current="page" href="admin-homepage.php">Home</a>
					</li>
					
				  </ul>
				  			
				   	<a href="admin-homepage.php" type="button"
            		class="btn btn-outline-primary me-3 shadow-sm btn-width">Back</a>
				</div>
	  </div>
	  </nav>
	
	</header>
  <!--EOF Navigation bar-->

  <!-- Body -->
  <body class="slectmenu">
    <h3 class="pagetitle_student_delete">
      <br /><br />Privileged Admin Access Control<br /><br />
    </h3>

    <div class="container11">
	  <a href="Admin/student-registration.php">
      <button class="btn-3">
        <i class="bi bi-person-plus"></i> <br />
        <br />Add <br />
        Student
      </button>
	  </a>
      <a href="Admin/student-display.php"
        ><button class="btn-3">
          <i class="bi bi-archive"></i> <br /><br />Edit/Update <br />
          Student
        </button></a
      >
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
