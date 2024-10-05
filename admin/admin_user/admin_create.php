<?php 
error_reporting(0);
include_once '../../connect.php';
$con = connection(); // Method that connect to SQL


if(isset($_POST['submit']))
{
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username) || empty($password)) 
    {
        header("Location: admin_create.php?error=1");
    } 
    elseif(strlen($username) < 4) 
    {
        header("Location: admin_create.php?error=2");
    }
    else
    {
    $sql="insert into `useraccount` ( username, password)
    values('$username', '$password')";

    $result=mysqli_query($con,$sql); //Connection
    if($result)
    {
        //echo "Reservation submitted successfully";
        header('location:admin_users.php'); 
    }
    else{
        die(mysqli_error($con));
    }

    }
}
    

?>

<html>
    <head>
        <title>Cafe Librew- Admin</title>
        <link rel="stylesheet" type="text/css" href="../admin_css/admin2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
<link rel="icon" href ="..\admin_assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    </head>
    <body>
        <div class ="container">
            <div class="row">

                <div class="left">
                    <div class="header">
                        <a href="../admin_login/admin_login.php"><img class="logo" src="../admin_assests/logo.png"></a>
                        <h1>CAFE LIBREW</h1>
                        <h3>RESERVATION SYSTEM - ADMIN</h3>
                    </div>

                    <button class="button" name="users"><a href="admin_users.php">USERS</a></button> 
                    <button class="button_selected" name="add user"><a href="admin_create.php" class="a2">CREATE USER ACCOUNT </a></button>
                    <button class="button2" name="to_users"><a href="../admin_reservation/admin.php" class="a3">RESERVATIONS</a></button> <br> 
     
                    <div class="form_container2">
                        <div class="table_display2">
                        <br>
                        <h2>USER ACCOUNT </h2> <br>
                        <?php
                        if($_GET["error"]==1) 
                        {
                            echo '<p style="color: red; font-size: 15px; text-align: center;">Username and Password are required.</p>';
                        } 
                        elseif($_GET["error"]==2) 
                        {
                            echo '<p style="color: red; font-size: 15px; text-align: center;">Username must be atleast 4 characters.</p>';
                        }
                    ?>
                    <br>
                                <form action="#" method="POST" >
                                <label for="username" class="form-label">Username</label> <br> 
                                <input type="text" class="form-control" name="username"><br> 

                                <label for="password" class="form-label">Password</label><br> 
                                <input type="password" class="form-control"  name="password"><br> 
                                
                                    <button class="button3" name="submit">CREATE USER ACCOUNT</button> <br>
                                </form>
     
                            
                        </div>
                    </div> <!--end of form container-->
                </div><!--end of left -->

                <div class="right">
                    <img class="sidepic" src="../admin_assests/collage.jpg"> <br>
                    <img class="sidepic" src="../admin_assests/collage.jpg"> <br>
                    <img class="sidepic" src="../admin_assests/collage.jpg"> <br>
                    </div><!--end of right div-->

            </div><!--end of row-->
        </div><!--end of container-->
    </body>
</html>