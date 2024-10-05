<?php 
error_reporting(0);

include_once('../../connect.php');
$con = connection(); // Method that connect to SQL

if(isset($_POST['log_in'])) 
    {
        $admin_username = mysqli_real_escape_string($con, $_POST['admin_username']);
        $admin_password = mysqli_real_escape_string($con, $_POST['admin_password']);

    if(empty($admin_username) || empty($admin_password)) {
        header("Location: admin_login.php?error=2");
    } elseif(strlen($admin_username) < 4) {
        header("Location: admin_login.php?error=3");
    } else {
    $sql = "SELECT * FROM `admin` Where admin_username = '$admin_username' AND admin_password = '$admin_password'";
    $admin = $con->query($sql) or die ($con->error);
    $row = $admin->fetch_assoc();
    $total = $admin->num_rows;

        if($total > 0){

            session_start();

                 $_SESSION['admin_username'] = $row['admin_username'];
                 header("Location: ../admin_reservation/admin.php");

        } else {
            header("Location: admin_login.php?error=1");
        
        }
    }

    }



?>


<html>
    <head>
        <title>Cafe Librew - Admin Log in</title>
        <link rel="stylesheet" type="text/css" href="../admin_css/admin_login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
        <link rel="icon" href ="..\admin_assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    </head>
    <body>
        <div class ="container">
            <div class="row">
                <div class="left">
                    <img class="sidepic" src="../admin_assests/collage.jpg"><br>
                    <img class="sidepic" src="../admin_assests/collage.jpg">
                </div>
                <div class="center">
                    <table>
                        <tr>
                            <td>
                                <a href="../admin_login/admin_login.php"><img class="logo" src="../admin_assests/logo1.png"></a>
                            </td>
                            <td>
                                <h1>CAFE LIBREW</h1>
                                <h3>RESERVATION SYSTEM</h3>
                            </td>
                        </tr>
                    </table>
                    <p class="label">Admin Log in</p>

                    <?php
                        if($_GET["error"]==1) {
                            echo '<p style="color: red; font-size: 15px; text-align: center;">Username or Password is Invalid.</p>';
                        } elseif($_GET["error"]==2) {
                            echo '<p style="color: red; font-size: 15px; text-align: center;">Username or Password is Required.</p>';
                        } elseif ($_GET["error"]==3) {
                            echo '<p style="color: red; font-size: 15px; text-align: center;">Username must be atleast 4 characters.</p>';
                        }
                    ?>

                    <div class="divform">
                        <form action="#" method="POST" >
                                <label for="username" class="label">Username:</label> <br>
                                <input type="text" class="textbox" id="admin_username" name="admin_username"> <br> 
                            
                                <label for="password" class="label">Password:</label><br>
                                <input type="password" class="textbox" id="admin_password" name="admin_password"> <br>
                                
                                <button class="log_in" name="log_in">LOG IN</button> 
                                <p class="copyright"> Copyright © SIA sisters</p>
                        </form>
                    </div>
                    
                </div>
                <div class="right">
                    <img class="sidepic" src="../admin_assests/collage.jpg">
                    <img class="sidepic" src="../admin_assests/collage.jpg">
                </div>
            </div>
        </div>
    </body>
</html>