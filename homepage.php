<?php 


session_start();
 
// Check if the user is already logged in as admin, then go to admin homepage
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin_status"] == '1'){
  header("location: admin-homepage.php");
  exit;
}
// Check if the user is already logged in as student, then go to admin homepage
else if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true && $_SESSION["admin_status"] !== '1'){
  header("location: logged-homepage.php");
  exit;
}


//retrieve data







?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FCUC - Secure Voting System</title>
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
            href="login.php"
          >
            Vote
          </a>
          <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="login.php"
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
    
	<!-- slideshow container -->
	<div class = "slideshow-container">
	
	<!-- Full width image with number and caption -->
	<div class = "mySlides fade">
		<img src = "img/voterightimage1.jpg" style = "width: 100%">
		<div class = "text"> VOTE IS OUR RIGHT</div>
	</div>
	
	<div class = "mySlides fade">
		<img src = "img/voterightimage2.png" style = "width: 100%">
		<div class = "text"> VOTE WISELY NOW</div>
	</div>
	
	
	<!-- Next and previous button -->
	<a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
	<a class = "next" onclick = "plusSlides(1)">&#10095;</a>
	</div>
	
	
	<!-- The dots below slider -->
	<div style = "text-align: center">
		<span class = "dot" onclick = "currentSlide(1)"> </span>
		<span class = "dot" onclick = "currentSlide(2)"> </span>
	</div>
	
    <p><br /><br /></p>

    <div class="grid-container1">
      <div class="whyvote">
        <h4>Why Vote?</h4>
      </div>
      <div class="whyvotedetail">
        <p>
          The law does not require citizens to vote, but voting is a very
          important part of any democracy. By voting, citizens are participating
          in the democratic process. Citizens vote for leaders to represent them
          and their ideas, and the leaders support the citizens interests.
        </p>
      </div>
      <div class="votehere">
        <h4>Why Choose the Right Candidate?</h4>
      </div>
      <div class="voteheredetail">
        <p>
          Choose the right candidate to fight for your rights as students. Your
          future representative will be the one to fight for your rights in the
          university hence be a part of the process in selecting the right
          leader to lead and fight for your rights.
        </p>
      </div>
    </div>
    <p><br /><br /><br /></p>
	
<h4 class= "pagetitle">Meet The Candidates of the Election<br/><br/></h4>

<div class = "row">
	<div class = "column">
		<div class = "card">
			<img src = "img/Candidate1.jpg" alt = "Candidate 1" style = "width:100%" class="img2" >
			<div class = "container">
				<h2>Davinia</h2>
				<p class= "title text-center">ARTS & DESIGN - YEAR 2</p>
				<p class= "text-center" > "Your Education, Your Life, Your School, Our Time Is Now. Vote for Davinia, your voice!"</p>
			</div>
		</div>
	</div>
	
	<div class = "column">
		<div class = "card">
			<img src = "img/Candidate2.jpg" alt = "Candidate 2" style = "width:100%" class="img2" >
			<div class = "container">
				<h2>Ho Wei Zheng</h2>
				<p class= "title text-center">BCSIS - YEAR 1</p>
				<p class= "text-center" > "You???ve seen the best now choose the best, vote for me, Ho Wei Zheng."</p>
			</div>
		</div>
	</div>
	
	<div class = "column">
		<div class = "card">
			<img src = "img/Candidate3.jpg" alt = "Candidate 3" style = "width:100%" class="img2" >
			<div class = "container">
				<h2>Amirul</h2>
				<p class= "title text-center">BITNS - YEAR 3</p>
				<p class= "text-center" >  "Vote for Amirul. I promise I???ll do my best I???ll never stop to take a rest."</p>
			</div>
		</div>
	</div>
</div>

<p><br /><br /><br /></p>	

<div class = "timercontainer">
<h4 class = "pagetitle" id = "title"> CHECK OUT THE WINNER OF THE ELECTION HERE</h4>
	<div id = "countdown" style = "text-align: center;">
		<ul>
			<li><span id = "days"></span>Days</li>
			<li><span id = "hours"></span>Hours</li>
			<li><span id = "minutes"></span>Minutes</li>
			<li><span id = "seconds"></span>Seconds</li>
		</ul>
	</div>
	
	<div id = "winnerlink" class="winnerlinkcontainer">
      <a href="winner.php" class="btn">CLICK HERE TO VIEW THE WINNER</a>
    </div>
	
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
      ??2022 Copyright
      <a class="text-dark" href="https://firstcity.edu.my/"
        >First City University College</a
      >
    </div>
  </footer>

<script>
let slideIndex = 1;
showSlides(slideIndex);

//Next and previous control
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Thumbnail image control
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n){
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
	
	if (n > slides.length) {
		slideIndex = 1
	}
	
	if (n < 1) {
		slideIndex = slides.length
	}
	
	
	
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
}

	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}


</script>



<script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yy = today.getFullYear(),
      nextYear = yy + 1,
      dayMonth = "05/12/",
	  //dayMonth = "05/11/",
      winner = dayMonth + yy;
  
  today = mm + "/" + dd + "/" + yy;
  if (today > winner) {
    winner = dayMonth + nextYear;
  }
  
  const countDown = new Date(winner).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
		  document.getElementById("title").style.display = "none";
          document.getElementById("countdown").style.display = "none";
		  document.getElementById("winnerlink").style.display = "block";
		  
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
</script>

</html>
