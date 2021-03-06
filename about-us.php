
<?php
  // Include config file to start db
  session_start();

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
    <title>About Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
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
          <!-- -->
          <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){ ?>
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
  <body>
    <!-- <div class="aboutusdetails"> -->
    <div class="team-section88">
      <div class="container88">
        <div class="row88">
          <div class="section-title88">
            <h1 style = "text-align:center;">Our Team</h1>
			<p></br> </p>
            <p>
              The four developers of this website are; Saravanaaguru,
              Piravindraj, Adrianus Tristan and Leong Min Yi, of the BITNS
              course - OCT 2020Semester. The developers developed this secure
              voting website for the Software Development Project that is
              currently being held at First City University College in the
              February 2022 semester.
            <p></br> </p>
			<p>
          </div>
        </div>
        <div class="row88">
          <div class="team-items88">
            <div class="item88">
              <img src="img/guru.jpg" alt="team" />
              <div class="inner88">
                <div class="info88">
                  <h5>Saravanaaguru</h5>
                  <p>Project Manager</p>
                  <div class="social-links88">
                    <a href="https://www.facebook.com/saravanaaguru.saravanaaguru"
                      ><span
                        ><i
                          class="fa fa-facebook-official"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.instagram.com/saravanaaguru/"
                      ><span
                        ><i
                          class="fa fa-instagram"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://twitter.com/raverong"
                      ><span
                        ><i class="fa fa-twitter" aria-hidden="true"></i></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item88">
              <img src="img/raj.jpg" alt="team" />
              <div class="inner88">
                <div class="info88">
                  <h5>Piravindraj</h5>
                  <p>Front End Developer</p>
                  <div class="social-links88">
                    <a href="https://www.facebook.com/REALiFrankenCop"
                      ><span
                        ><i
                          class="fa fa-facebook-official"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.instagram.com/piravind_22/"
                      ><span
                        ><i
                          class="fa fa-instagram"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://twitter.com/iFrankenCop"
                      ><span
                        ><i class="fa fa-twitter" aria-hidden="true"></i></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item88">
              <img src="img/minyi.jpg" alt="team" />
              <div class="inner88">
                <div class="info88">
                  <h5>Leong Min Yi</h5>
                  <p>Back End Developer</p>
                  <div class="social-links88">
                    <a href="https://www.facebook.com/myleong42442424242424242424242"
                      ><span
                        ><i
                          class="fa fa-facebook-official"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.instagram.com/myleong424424/"
                      ><span
                        ><i
                          class="fa fa-instagram"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.twitter.com/"
                      ><span
                        ><i class="fa fa-twitter" aria-hidden="true"></i></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item88">
              <img src="img/tristan.jpg" alt="team" />
              <div class="inner88">
                <div class="info88">
                  <h5>Adrianus Tristan</h5>
                  <p>System Analyst</p>
                  <div class="social-links88">
                    <a href="https://www.facebook.com/"
                      ><span
                        ><i
                          class="fa fa-facebook-official"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.instagram.com/javelineou/"
                      ><span
                        ><i
                          class="fa fa-instagram"
                          aria-hidden="true"
                        ></i></span
                    ></a>
                    <a href="https://www.twitter.com/"
                      ><span
                        ><i class="fa fa-twitter" aria-hidden="true"></i></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </body>

  
</br>
</br>
</br>

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
  <!-- EOF Footer -->
</html>
