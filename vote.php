<?php
	include("config.php");
  session_start();

  // Check if the user is logged in, otherwise redirect to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
		.container
			{
				max-width:500px;
				width:100%;
				background-color:white;
				margin:20px auto;
				padding:30px;
				box-shadow:5px 5px 5px rgba(0, 0, 0, 0.5);
			}
		.container .form
			{
				width: 100%;
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
	<h2 class="pagetitle" style= " color:Blue;">
      Welcome, <?php echo $_SESSION['student_id']  ?>
    </h2>
	
    <h2 class="pagetitle">
      Vote For 1 Deserved Candidate
    </h2>
	<br />
	
	<!--Vote form-->
	<div class="container">
	<form class="row row-cols-lg-auto g-3 align-items-center" action="vote-action.php" method="POST">
	
	  <div class="col-12">
		<label class="visually-hidden" for="student_id">student ID</label>
		<div class="input-group">
		  <input type="text" class="form-control" id="student ID" value="<?php echo $_SESSION['student_id'] ?>" readonly>
		</div>
	  </div>

	  <div class="col-12">
		<label class="visually-hidden" for="candidate_id">Candidate ID</label>
		<select class="form-select" id="candidate_id" name="candidate_id" required>
		  <option value="">Choose...</option>
		  <option value="B1454">Saravanaaguru</option>
		  <option value="B1745">Tristan</option>
		  <option value="B1404">Piravindraj</option>
		</select>
	  </div>

	  <div class="d-grid gap-2 col-6 mx-auto">
		<input type="submit" value="Vote" class="btn btn-primary" name="submit">
	  </div>
	  
	</form>
	</div>
	
	<p><br /></p>
	<!--EOF Vote form-->
	
	<!--Candidate card -->
	<div class="blog-slider">
	  <div class="blog-slider__wrp swiper-wrapper">

		<div class="blog-slider__item swiper-slide">
		  <div class="blog-slider__img">
			<img src="img/guru.jpg" alt="">
		  </div>
		  <div class="blog-slider__content">
			<span class="blog-slider__code">Bachelors Degree in IT</span>
			<div class="blog-slider__title">SARAVANAAGURU MANIVANNAN</div>
			<div class="blog-slider__text">"Somewhere inside all of us is the power to change the world"</div>
		  </div>
		</div>
		
		<div class="blog-slider__item swiper-slide">
		  <div class="blog-slider__img">
			<img src="img/tristan.jpg" alt="">
		  </div>
		  <div class="blog-slider__content">
			<span class="blog-slider__code">Bachelors Degree in CS</span>
			<div class="blog-slider__title">ADRIANUS TRISTAN</div>
			<div class="blog-slider__text">"what you do has far greater impact than what you say"</div>
		  </div>
		</div>
		
		<div class="blog-slider__item swiper-slide">
		  <div class="blog-slider__img">
			<img src="img/raj.jpg" alt="">
		  </div>
		  
		  <div class="blog-slider__content">
			<span class="blog-slider__code">Bachelors Degree in Data Science</span>
			<div class="blog-slider__title">PIRAVINDRAJ</div>
			<div class="blog-slider__text">"A good education is the foundation for better future"</div>
		  </div>
		</div>
		
	  </div>
	  <div class="blog-slider__pagination"></div>
	</div>
<!--EOF Candidate card -->
    <p><br /></p>
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

<script>
	var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
</script>

