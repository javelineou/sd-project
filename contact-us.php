<?php
  if(count($_POST)>0){
    if(empty($_POST['g-recaptcha-response'])){
      echo '<script language="javascript">';
      echo 'alert("Please solve reCaptcha!")';
      echo '</script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
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
        <a class="navbar-brand mt-2 mt-lg-0" href="homepage.html">
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
              <a class="nav-link" href="homepage.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact Us</a>
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
    <div class="row mt-5">
      <!-- Left Column -->
      <div class="col-md ms-5">
        <h1 class="section-title pb-3">Contact Us</h1>
        <p class="pb-4 w-50" style="font-size: 18px">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum repellat quaerat voluptatibus placeat nam, commodi
          optio pariatur est quia magnam eum harum corrupti dicta, aliquam sequi
          voluptate quas.
        </p>
        <div class="mb-4">
          <i class="bi bi-telephone-fill" style="font-size: 20px">
            <span class="ms-3">+60 (017) 1312312</span></i
          >
        </div>
        <div class="col-8 mb-4">
          <i class="bi bi-geo-alt-fill w-25" style="font-size: 20px">
            <span class="ms-3">First City University College</span></i
          >
        </div>
        <div class="mb-4">
          <i class="bi bi-envelope-fill" style="font-size: 20px">
            <span class="ms-3">enquiry@firstcity.edu.my</span></i
          >
        </div>
      </div>
      <!-- Right Column -->
      <div class="col-md ms-5">
        <form action="" method="POST">
        <input
          type="text"
          id="name"
          class="form-control w-75"
          placeholder="Name"
          required
        />
        <label></label>
        <input
          type="email"
          id="email"
          class="form-control w-75"
          placeholder="Email"
          required
        />
        <label></label>
        <textarea
          class="form-control w-75 mb-4"
          id="enquiries"
          rows="5"
          placeholder="Leave your message..."
          required
        ></textarea>
        <div
          class="g-recaptcha"
          data-sitekey="6LdXpz4fAAAAAAfubqQ6XHcHDOQdNSrRvrpmkR56"
        ></div>
        <button class="btn btn-primary shadow-sm my-4" type="submit">
          Submit
        </button>
        </form>
      </div>
    </div>
  </body>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-auto">
    <!-- Grid container -->
    <div class="container p-4">
      <h5 class="text-uppercase text-center">About Developers</h5>
      <!-- Section Text -->
      <section class="mb-auto text-center">
        <p>
          The four developers of this website are; Saravanaaguru, Piravindraj,
          Adrianus Tristan and Leong Min Yi, of the BITNS course - OCT 2020
          Semester. The developers developed this secure voting website for the
          Software Development Project that is currently being held at First
          City University College in the February 2022 semester.
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