<?php
session_start();

// Check if the user is already logged in as admin, then go to admin homepage
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin_status"] == '1'){
  header("location: admin-homepage.php");
  exit;
}
// Check if the user is already logged in as student, then go to admin homepage
else if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true && $_SESSION["admin_status"] != '1'){
  header("location: logged-homepage.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
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

    <!-- reCaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    <section class="vh-10" style="background-color: #e1f3f0">
      <div class="container py-3 h-10">
        <br>
		<h1 style="text-align:center;">Welcome to First City University College Voting System</h1><br><br>
		  <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div
              class="card mx-auto shadow"
              style="
                border-radius: 1rem;
                background-color: #fafafa;
                width: 26rem;
              "
            >
              <form class="card-body p-5 text-center" action="login-action.php" method="POST">
              <!-- <form class="card-body p-5 text-center" action="login-action-vuln.php" method="POST"> -->
              <!-- <form class="card-body p-5 text-center" action="login-action-vuln2.php" method="POST"> -->
                <h3 class="mb-5">Login</h3>
				
				        <h6>Student ID</h6>
                <div class="form-outline mb-3">
                  <input
                    type="text"
                    id="studentId"
                    name="studentId"
                    class="form-control"
                    placeholder="Student ID"
                    required
                  />
                  <label class="form-label" for="studentId"></label>
                </div>
				
				        <h6>Password</h6>
                <div class="form-outline mb-3">
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    required
                  />
                  <label class="form-label" for="password"></label>
                </div>
				<div class="g-recaptcha" data-sitekey="6LfuT50fAAAAAPkUxAYUgDIV_SXZo5AQEmNkPwDL"></div> 

                <hr class="my-4" />

                <input name="login-btn" class="btn btn-primary shadow-sm" type="submit" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
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
   <!--EOF Footer -->
</html>
