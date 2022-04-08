<?php
    // Include config file to start db
    include ("config.php");

    if(count($_POST)>0){
        if(empty($_POST['g-recaptcha-response'])){
            ?>
            <script type="text/javascript">
            alert("Please solve the captcha!");
            window.location.href = "login.php";
            </script>
            <?php
        }
      }

    // Initialize the session
    session_start();

    // Define variables and initialize with empty values
    $studentId = $password = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $studentId = $_POST["studentId"];
        $password = md5($_POST["password"]); //Password input converted into md5

        //Validate credentials
             // Prepare a select statement
             $sql = "SELECT * from student where student_id='$studentId' and password='$password'";

             $result = $conn->query($sql);
             if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION["loggedin"] = true;
                header("Location: logged-homepage.php");
             }
             else{
                ?>
                <script type="text/javascript">
                alert("Wrong Student ID and password!");
                window.location.href = "login.php";
                </script>
            <?php
             }
    }

?>