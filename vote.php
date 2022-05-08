<?php
	include("config.php");
  session_start();

   // Check if the user is logged in, otherwise redirect to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }

  // Check if the user has vote or not
  if($_SESSION["vote_status"] != '0'){
    header("location: youve-voted.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vote Now!</title>
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
    <!-- Bootstrap Icon Lib-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
	
	 <!-- responsive cards CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  </head>

	<style>
		.img2
			{
				height:300px;
			}
		h2
		{
			text-align:center;
		}
	</style>
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
            width="140px"
            height="55"
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
          <!-- This one should be logout as it is in the vote page already -->
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

  <!-- Body -->
  <body>
	</br>

	
    <h2 class="pagetitle">
      Vote For One Deserved Candidate
    </h2>
	<br />
	
	<!--Candidate card -->
	<form action="vote-action.php" method="POST">
	<div class = "row">
		<div class = "column">
			<div class = "card">
				<img src = "img/Candidate1.jpg" alt = "Candidate 1" style = "width:100%" class="img2" >
				<div class = "container">
					<h2>Davinia</h2>
					<p class= "title text-center">ARTS & DESIGN - YEAR 2</p>
					<p class= "text-center" > "Your Education, Your Life, Your School, Our Time Is Now. Vote for Edward Santos, your voice!"</p>
					 <div class="d-grid gap-2">
						<input type="submit" value="Vote" class="btn btn-primary" name="candidate_A">
					 </div>
					 <p></br></p>
				</div>
			</div>
		</div>
	
		<div class = "column">
			<div class = "card">
				<img src = "img/Candidate2.jpg" alt = "Candidate 2" style = "width:100%" class="img2" >
				<div class = "container">
					<h2>Ho Wei Zheng</h2>
					<p class= "title text-center">BCSIS - YEAR 1</p>
					<p class= "text-center" > "You’ve seen the best now choose the best, vote for me, Melissa Carlos."</p>
					<div class="d-grid gap-2">
						<input type="submit" value="Vote" class="btn btn-primary" name="candidate_B">
					</div>
					<p></br></p>
				</div>
			</div>
		</div>
	
		<div class = "column">
			<div class = "card">
				<img src = "img/Candidate3.jpg" alt = "Candidate 3" style = "width:100%" class="img2" >
				<div class = "container">
					<h2>Amirul</h2>
					<p class= "title text-center" >BITNS - YEAR 3</p>
					<p class= "text-center" >  "Vote 4 Alyssa. I promise I’ll do my best I’ll never stop to take a rest."</p>
					<div class="d-grid gap-2">
					  <input type="submit" value="Vote" class="btn btn-primary" name="candidate_C">
					</div>
					<p></br></p>
				</div>
			</div>
		</div>
	</div>
	</form>

<!--EOF Candidate card -->
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
   <!--EOF Footer -->
  
</html>



