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
        //$studentId = $mysqli -> real_escape_string($_POST['studentId']);
        $password = md5($_POST["password"]); //Password input converted into md5
		
		//Get password without MD5 hash
		//$password = $_POST["password"];

        //Validate credentials
           $sql = "SELECT student_id, admin_status, vote_status from student where student_id='$studentId' and password='$password'";
           $result = mysqli_query($conn, $sql);

        //Validate credentials using prepared statement
        //  $sql = "SELECT student_id, admin_status from student where student_id=? and password=?"; 
        //  $userStatement = mysqli_prepare($conn, $sql);
        //  mysqli_stmt_bind_param($userStatement, 'ss', $studentId, $password);
        //  mysqli_stmt_execute($userStatement);
        //  $result = mysqli_stmt_get_result($userStatement);


             if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION["admin_status"] = $row['admin_status'];
                $_SESSION["vote_status"] = $row['vote_status'];
                $_SESSION["loggedin"] = true;
					
				
                if($_SESSION["admin_status"] == 1){
                    header("Location: admin-homepage.php");
                }
                else{
                    header("Location: logged-homepage.php");
                }
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