<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Election Result</title>
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

          <!-- Check whether user is logged in or not to show appropriate button -->
          <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true ){ ?>
          <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="login.php"
          >
            Login
          </a>
          <?php } else{ ?>
            <a
            type="button"
            class="btn btn-outline-primary me-3 shadow-sm btn-width"
            href="logout.php"
          >
            Logout
          </a>
          <?php } ?>
          
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
  </header>

<!-- Body -->
<body style="background-color: #e1f3ff; overflow-x: hidden;">
    <div class="text-center mt-4">
      <h1 class="display-4 fw-bold">FCUC Student Council Election Result</h1>
      <img
        src="img/unknown.png"
        class="img-fluid my-5"
        width="300"
        height="175"
        alt="Winner"
      />
      <h1 class="display-6">Countdown</h1>
      <div id="countdown" class="countdown">
        <div class="row justify-content-center mt-1 mb-5">
            <div class="col-1">
                <h2 id="days"></h2>
                <small>Days</small>
            </div>
        
            <div class="col-1">
                <h2 id="hours"></h2>
                <small>Hours</small>
            </div>
        
            <div class="col-1">
                <h2 id="minutes"></h2>
                <small>Minutes</small>
            </div>
        
            <div class="col-1">
                <h2 id="seconds"></h2>
                <small>Seconds</small>
            </div>
        </div>
          <!-- Countdown script -->
          <script>
            const days = document.getElementById("days");
            const hours = document.getElementById("hours");
            const minutes = document.getElementById("minutes");
            const seconds = document.getElementById("seconds");

            const electionTime = new Date(`May 30 2022 00:00:00`);

            // Update countdown time
            function updateCountdown() {
              const currentTime = new Date();
              const diff = electionTime - currentTime;

              const d = Math.floor(diff / 1000 / 60 / 60 / 24);
              const h = Math.floor(diff / 1000 / 60 / 60) % 24;
              const m = Math.floor(diff / 1000 / 60) % 60;
              const s = Math.floor(diff / 1000) % 60;

              days.innerHTML = d;
              hours.innerHTML = h < 10 ? "0" + h : h;
              minutes.innerHTML = m < 10 ? "0" + m : m;
              seconds.innerHTML = s < 10 ? "0" + s : s;
            }

            setInterval(updateCountdown, 1000);
          </script>
    </div>
</body>

<p></br></br></br></p>
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
