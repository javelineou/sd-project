<?php
	
   session_start();
    if(!isset($_SESSION['student_id'])){
        header("location: login.php");
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
              <a class="nav-link" href="about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
          </ul>
          <!-- Button on Navbar -->
           <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="#"
          >
            Vote
          </a>
          <!-- This one should be logout as it is in the vote page already -->
          <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="#"
          >
            Login
          </a> 
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
  </header>

  <!-- Body -->
  <body>
    <h3 class="pagetitle">
      <br /><br />CANDIDATES OF THE ELECTION<br /><br />
    </h3>

    <div class="container">
	<form action="../vote-action.php" method="POST">
      <div class="row row-cols-4">
        <!-- Row One -->
        <div class="col">
          <p><br /></p>
          <img src="img/candidate1.jpg" class="img-fluid" alt="CCandidate 1" />
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br />
            <b>Edward Santos </b>is a student of the <b>Year 2</b> course of
            <b>Degree in Arts & Design</b>
          </p>
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br />
            "Your Education, Your Life, Your School, Our Time Is Now. Vote for
            Edward Santos, your voice!"
          </p>
        </div>

        <div class="col">
          <p><br /><br /><br /><br /><br /><br /></p>

          <div class="text-center">
            <button
              type="submit" value="vote" name="vote"
              class="btn btn-outline-primary me-3 shadow-sm btn-width">
              Vote Now
		    </button>
			
          </div>
        </div>

        <!-- Row Two -->
        <div class="col">
          <p><br /><br /></p>

          <img src="img/candidate2.jpg" class="img-fluid" alt="CCandidate 2" />
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br /><br />
            <b>Melissa Carlos </b>is a student of the <b>Year 1</b> course of
            <b>Degree in Computer Science(Intelligence System)</b>
          </p>
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br /><br />
            "You’ve seen the best now choose the best, vote for Melissa Carlos."
          </p>
        </div>

        <div class="col">
          <p><br /><br /><br /><br /><br /><br /><br /></p>

          <div class="text-center">
		  <button
              type="submit" value="vote" name="vote"
              class="btn btn-outline-primary me-3 shadow-sm btn-width">
              Vote Now
		    </button>
          </div>
        </div>

        <!-- Row Three -->
        <div class="col">
          <p><br /><br /></p>

          <img src="img/candidate3.jpg" class="img-fluid" alt="Candidate 3" />
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br /><br />
            <b>Alyssa Carly </b>is a student of the <b>Year 3</b> course of
            <b>Degree in Information Technology(Network & Security)</b>
          </p>
        </div>
        <div class="col">
          <p>
            <br /><br /><br /><br /><br /><br /><br /><br />
            "Vote 4 Alyssa. I promise I’ll do my best I’ll never stop to take
            a rest."
          </p>
        </div>

        <div class="col">
          <p><br /><br /><br /><br /><br /><br /><br /></p>

          <div class="text-center">
          		
            <button
              type="submit" value="vote" name="vote"
              class="btn btn-outline-primary me-3 shadow-sm btn-width">
              Vote Now
		   </button>
          </div>
        </div>	
      </div>
	</form>  
    </div>
    <p><br /><br /></p>
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
</html>
