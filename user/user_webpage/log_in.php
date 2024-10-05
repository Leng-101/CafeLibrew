<?php

    error_reporting(0);
    $note = "Please log in to continue";

    if(!isset($_SESSION))
    {
       session_start();
       
    }
    
    include_once('../../connect.php');
    $con = connection(); // Method that connect to SQL

    if(isset($_POST['log_in_button'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


    $sql = "SELECT * FROM `useraccount` Where username = '$username' AND password = '$password'";
    $user = $con->query($sql) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

        if($total > 0){

                 $_SESSION['username'] = $row['username'];
                 echo header("Location: account.php");

        } else {
            $note = "Invalid Username/Password";
        
        }
    }

 ?>

<html>
    <head>
        <title>Cafe Librew - Log in</title>
        <link rel="stylesheet" type="text/css" href="../css/log_in.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
        <link rel="icon" href ="..\main assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    </head>
    <body>
        <div class ="container">
            <div class="row">
                <div class="left">
                    <img class="sidepic" src="../main assests/collage.jpg"><br>
                    <img class="sidepic" src="../main assests/collage.jpg">
                </div>
                <div class="center">
                    <table>
                        <tr>
                            <td>
                                <img class="logo" src="../main assests/logo1.png">
                            </td>
                            <td>
                                <h1>CAFE LIBREW</h1>
                                <h3>RESERVATION SYSTEM</h3>
                            </td>
                        </tr>
                    </table>

                    <p><?= $note ?></p>
                    <div class="divform">
                        <form action="#" method="POST" >
                                <label for="username" class="label">Username:</label> <br>
                                <input type="text" class="textbox" id="username" name="username" required> <br> 
                            
                                <label for="password" class="label">Password:</label><br>
                                <input type="password" class="textbox" id="password" name="password" required><br>
                                
                                <button class="log_in" name="log_in_button">LOG IN</button><br>
                                <br>
                                <div class="div">
                                <p class="copyright"> Copyright © SIA sisters</p>
                                </div>
                            </form>
                    </div>
                    
                </div>
                <div class="right">
                    <img class="sidepic" src="../main assests/collage.jpg">
                    <img class="sidepic" src="../main assests/collage.jpg">
                </div>
            </div>
        </div>
    </body>
</html>