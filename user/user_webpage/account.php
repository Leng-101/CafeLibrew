<?php 
    error_reporting(0);
    include_once '../../connect.php';
    $con = connection(); // Method that connect to SQL

    if(!isset($_SESSION)){
        session_start();
    }
     
    ?>

<html>
    <head>
        <title>Cafe Librew- My Account</title>
        <link rel="stylesheet" type="text/css" href="../css/acc.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
<link rel="icon" href ="..\main assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    </head>
    <body>
        <div class ="container">
            <div class="row">
                <div class="left">
                    <div class="header">
                        <ul >
                            <li><img class="logo" src="../main assests/logo.png"></li>
                            <li><h1>CAFE LIBREW</h1></li>
                            <li><h3>RESERVATION SYSTEM</h3></li>
                           
                        </ul> 
                    </div>
                    <div class="leftleft">
                        <p class="menu_label">RESERVATION</p>
                        <button class="side_button" name="reservation"><a href="form.php" class="a2">CREATE</a></button> <br>
                        <p class="menu_label">MENU</p>
                        <button class="side_button" name="books"><a href="../menu/books.php">BOOKS</a></button> <br>
                        <button class="side_button" name="beverage"><a href="../menu/beverages1.php" class="a2">BEVERAGES 1</a></button> <br>
                        <button class="side_button" name="beverage"><a href="../menu/beverages2.php" class="a2">BEVERAGES 2</a></button> <br>
                        <button class="side_button" name="pastries"><a href="../menu/pastries.php" class="a2">PASTRIES</a></button> <br> 
                        <button class="sign_out_button" name="log_out"><a href="../index_user.php" class="a2">LOG OUT </a></button> <br>
                    
                    </div> 
                    <div class="leftright"> 
                        <p class="reserve_label">MY PENDING RESERVATIONS</p>
                     <table>
                        <thead>
                        <tr>
                            <th class="table_heading_num">NO. </th>
                            <th class="table_heading_name">NAME </th>
                            <th class="table_heading_time">TIME </th>
                            <th class="table_heading_date">DATE </th>
                            <th class="table_heading1">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php 

                            if(isset($_SESSION['username'])) {

                                $user = $_SESSION['username']; //Almodiel
        
                            $query_user ="Select * from `useraccount` WHERE username = '$user'";   
                            $result_user = mysqli_query($con, $query_user);
                            $row = mysqli_fetch_array($result_user);
                            $id = $row['id']; //Column id in accountuser database

                            $query_form = "Select * from `user_reserveform` where user_id = '$id' AND admin_status = 'For Approval'";
                            $result_form = mysqli_query($con, $query_form);
                                    
                              if ($result_form){ //If its true
                                while($row=mysqli_fetch_assoc($result_form))
                                {
                               
                                    $reservation_id= $row['reservation_id'];
                                    $name=$row['name']; 
                                    $time_begins=$row['time_begins'];
                                    $date=$row['date'];

                                       echo'<tr>
                                            <td class="table_data_num">'.$reservation_id.'</td>
                                            <td class="table_data_name">'.$name.'</td>
                                            <td class="table_data_time">'.$time_begins.'</td>
                                            <td class="table_data_date">'.$date.'</td>

                                            <td class="table_heading1">
                                                <button class="table_button" name="view"><a href="../process/view.php?viewreservation_id='.$reservation_id.'">VIEW</a></button>
                                                <button class="table_button" name="update"><a href="../process/update.php?updatereservation_id='.$reservation_id.'">UPDATE</a></button>
                                                <button class="table_button" name="delete"><a href="../process/delete.php?deletereservation_id='.$reservation_id.'" class="a2">DELETE</a></button>
                                            </td>

                                         <tr>
                                         ';
                                     }  
                                }
               
                            ?>
                </tbody>
                </table> <br>   

                <div class="approved_div">
                     <p class="reserve_label">MY APPROVED RESERVATIONS</p>
                     <table class="table2">
                        <tr>
                            <th class="table_heading_num2">NO. </th>
                            <th class="table_heading_name2">NAME </th>
                            <th class="table_heading_time2">TIME</th>
                            <th class="table_heading_date2">DATE </th>
                            <th class="table_heading2">ACTION</th>
                        </tr>
                        <tbody>

                        <?php

                        $user = $_SESSION['username']; //Almodiel
                                
                        $query_user ="Select * from `useraccount` WHERE username = '$user'";   
                        $result_user = mysqli_query($con, $query_user);
                        $row = mysqli_fetch_array($result_user);
                        $id = $row['id']; //Column Id in accountuser database

                        $query_form = "Select * from `user_reserveform` where user_id = '$id' AND admin_status = 'Approved'";
                        $result_form = mysqli_query($con, $query_form);
        
                if ($result_form){
                    while($row=mysqli_fetch_assoc($result_form)) {
                                   $reservation_id=$row['reservation_id'];
                                    $name=$row['name'];
                                    $time_begins=$row['time_begins'];
                                    $time_ends=$row['time_ends'];
                                    $date=$row['date'];
                                    
                                    echo'<tr>
                                            <td class="table_data_num2">'. $reservation_id.'</td>
                                            <td class="table_data_name2">'.$name.'</td>
                                            <td class="table_data_time2">'.$time_begins.' - '.$time_ends.'</td>
                                            <td class="table_data_date2">'.$date.'</td>
                                            <td class="table_heading2">
                                                <button class="table_button2" name="view"><a href="../process/view.php?viewreservation_id='.$reservation_id.'">VIEW</a></button>
                                            </td>
                                        <tr>
                                     ';
                                }
                            }
                        }
                    
                            ?>
                        </tbody>
                        </table> <br>
                     </div> 
                     <p class="additional">Dear customer, your payment will be made on the cafe's counter. Thank you.</p>
                     </div>
                </div>
                <div class="right">
                <img class="sidepic" src="../main assests/collage.jpg"> <br>
                <img class="sidepic" src="../main assests/collage.jpg"> <br>
                <img class="sidepic" src="../main assests/collage.jpg"> <br>
                </div>
            </div>
        </div>
    </body>
</html>
                   