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
            href="vote.html"
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
		<div class="row d-flex justify-content-center align-items-center h-100">
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
                <div class="g-recaptcha" data-sitekey="6LdXpz4fAAAAAAfubqQ6XHcHDOQdNSrRvrpmkR56"></div>

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
  <footer class="bg-light text-center text-lg-start mt-auto">
    <!-- Grid container -->
    <div class="container p-4">
      <h5 class="text-uppercase text-center">About Developers</h5>
      <!-- Section Text -->
      <section class="mb-auto text-center">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum repellat quaerat voluptatibus placeat nam, commodi
          optio pariatur est quia magnam eum harum corrupti dicta, aliquam sequi
          voluptate quas.Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Sunt distinctio earum repellat quaerat voluptatibus placeat nam,
          commodi optio pariatur est quia magnam eum harum corrupti dicta,
          aliquam sequi voluptate quas.
        </p>
      </section>
    </div>

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
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      ©2022 Copyright
      <a class="text-dark" href="https://firstcity.edu.my/"
        >First City University College</a
      >
    </div>
  </footer>
</html>
