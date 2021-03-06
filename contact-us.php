<?php
  include ("config.php");
  session_start();
?>

<script>
  function confirmation(){
    var answer = confirm('Are you confirm to submit?');
    if(answer){
      form.submit();
    }
    else{
      alert("Submit insuccessful")
    }
  }
</script>



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
        <a class="navbar-brand mt-2 mt-lg-0" href="homepage.php">
          <img
            src="img/fcuc-sc.png"
            width="140px"
            height="55"
            alt="FCUC Student Council Logo"
          />
        </a>
        <!--width="50"--> 
        <!--height="50" --> 
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
  <body style="overflow-x:hidden;">
    <div class="row mt-5" >
      <!-- Left Column -->
      <div class="col-md ms-5">
        <h1 class="section-title pb-3">Contact Us</h1>
        <p class="pb-4 w-50" style="font-size: 18px">
          Your satisfaction is our main priority. In prior to that, hit us up anytime between 9am - 5pm on the weekdays as well as weekends. We will be happy to entertain you with our sweet voice
        </p>
        <div class="mb-4">
          <i class="bi bi-telephone-fill" style="font-size: 20px">
            <span class="ms-3">+60 (17) 1312312</span></i
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
      
      <!--contact us form -->
        <form action="contact-us.php" method="POST">
        <input
          type="text"
          id="Name"
		      name="Name"
          class="form-control w-75"
          placeholder="Name"
          required
        />
		<br />
 
        <input
          type="email"
          id="Email"
		      name="Email"
          class="form-control w-75"
          placeholder="Email"
          required
        />
		<br />

        <textarea
          class="form-control w-75 mb-4"
          id="Enquiries"
		      name="Message"
          rows="5"
          placeholder="Leave your message..."
          required
        ></textarea>
        <div
          class="g-recaptcha"
          data-sitekey="6LfuT50fAAAAAPkUxAYUgDIV_SXZo5AQEmNkPwDL">
		    </div>
        <input class="btn btn-primary shadow-sm my-4" type="submit" name="submit" onClick="confirmation();" value="Submit">
        
        </form>
        <!--EOF contact us form -->
      </div>
    </div>
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

<?php

if(isset($_POST['submit'])){
  if(empty($_POST['g-recaptcha-response'])){
    ?>
    <script type="text/javascript">
    alert("Please solve the captcha!");
    window.location.href = "contact-us.php";
    </script>
    <?php
  }
  else {
    $name       = $_POST['Name'];
    $email      = $_POST['Email'];
    $message  	= $_POST['Message'];
      
    
      $sql="INSERT INTO contact(name, email, message) VALUE ('$name', '$email', '$message')";
          
      if (mysqli_query($conn, $sql)) 
          {
            echo "enquiry submission successful". $sql;
            //go to thank you page
            echo ("<script LANGUAGE='JavaScript'>window.location.href='contact-us.php';</script>");
      } 
          else 
          { 
            echo "<script>alert('Failed to send message.')</script>"; 
          }
    
  }

}

?>