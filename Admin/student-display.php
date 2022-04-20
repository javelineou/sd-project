<?php

	// Starting session
	// session_start();

	// Check if user is whether or not an admin
	// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
	// header("location: ../logged-homepage.php");
	// exit;
	// }
?>

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
		<title> Display student </title>
	
	</head>
	
	<style>
			
			body
			{
				background: #e1f3ff;
			}
			table
			{
				background:white;
			}
			.update, .delete
			{
				background-color: green;
				color:white;
				outline:none;
				border-radius:5px;
				height:22px;
				width:80px;
				font-weight:bold;
				cursor:pointer;
			}
			.delete
			{
				background-color: red;
			}
			footer{
				position: fixed;
				left: 0;
				right: 0;
				bottom: 0;
			}
		</style>
	
	
	<!--Navigation bar-->
  	
	<header>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!--logo-->
			<a class="navbar-brand" href="../admin-selection.php">
				<img
				src="../img/fcuc-sc.png"
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
					<li class="nav-item">
					  <a class="nav-link	" aria-current="page" href="../admin-selection.php">Home</a>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Student
					  </a>
					  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="student-registration.php">Register</a></li>
						<li><a class="dropdown-item" href="student-display.php">Edit/Delete</a></li>
					  </ul>
					</li>
				  </ul>
				  			
				   	<a href="../homepage.php" type="button"
            		class="btn btn-outline-primary me-3 shadow-sm btn-width">Logout</a>
				  
				</div>
	  </div>
	  </nav>
	
	</header>
  <!--EOF Navigation bar-->


<?php
	include("../config.php");
	
	error_reporting(0);
	
	$query = "SELECT * FROM student";
	$data  = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	
	if($total != 0)
	{
		?>
		
			<h1 align="center">Student Records</h1>
			<center><table border="4" cellspacing="7" width="100%">
				<th width="10%">Name</th>
				<th width="5%">Student ID</th>
				<th width="20%">Faculty</th>
				<th width="5%%">Year</th>
				<th width="10%">Password</th>
				<th width="10%">Level of study</th>
				<th width="5%">Status</th>
				<th width="5%">Vote Status</th>
				<th width="10%">Operations</th>

			
			
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
				echo " <tr>
						<td>".$result[name]."</th>
						<td>".$result[student_id]."</td>
						<td>".$result[faculty]."</td>
						<td>".$result[year]."</td>
						<td>".$result[password]."</td>
						<td>".$result[level_of_study]."</td>
						<td>".$result[admin_status]."</td>
						<td>".$result[vote_status]."</td>
						<td><a href='student-update.php?student_id=$result[student_id]'><input type='submit' value='Update' class='update'></a>
						<a href='student-delete.php?student_id=$result[student_id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
					  </tr>
				";
		}
	}
	else
	{
		echo "No records found in the database";
	}
?>
</table>
</center>

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
    <div class="text-center p-3">
      ©2022 Copyright
      <a class="text-dark" href="https://firstcity.edu.my/"
        >First City University College</a
      >
    </div>
  </footer>
<!-- EOF Footer -->
</html>

<script>
	
	function checkdelete()
	{
		return confirm('Are you sure to delete this record?');
	}

</script>

























