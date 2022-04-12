<?php 
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
    header("location: login.php");
    exit;
}

// Check if the user is logged in as student, it'll go to student homepage
if($_SESSION["loggedin"] == true && $_SESSION["admin_status"] !== '1'){
  header("location: logged-homepage.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo "<title>Welcome, " . $_SESSION['student_id'] . "</title>"; ?>
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
            <li class="nav-item">
              <a class="nav-link" href="admin-selection.php">Admin Panel</a>
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
    <div class="slidecenter">
      <img
        class="voteimageslide"
        src="img/voterightimage1.jpg"
        alt="Vote Right Image 1"
      />
      <img
        class="voteimageslide"
        src="img/voterightimage2.png"
        alt="Vote Right Image 2"
      />
      <img
        class="voteimageslide"
        src="img/voterightimage3.jpg"
        alt="Vote Right Image 3"
      />
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
          and their ideas, and the leaders support the citizens' interests.
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

  <script>
    /*Automatic Slide*/
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("voteimageslide");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1;
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 5 seconds
    }
  </script>
</html>
