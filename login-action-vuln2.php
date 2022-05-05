<?php

    // Include config file to start db
    include ("config.php");

    // Initialize the session
    session_start();

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
                $studentId = $_POST["studentId"];
                $password = md5($_POST["password"]); //Password input converted into md5

                //Validate credentials
                $sql = "SELECT student_id, admin_status, vote_status from student where student_id='$studentId' and password='$password'";
                $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION["student_id"] = $row['student_id'];
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