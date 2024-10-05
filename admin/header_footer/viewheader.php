<?php
$reservation_id=$_GET['viewreservation_id'];
$sql="SELECT * FROM user_reserveform WHERE reservation_id='$reservation_id'";
$con = connection(); 
$result=mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);

    $name=$row['name'];
    $contact_number=$row['contact_number'];
    $time_begins=$row['time_begins'];
    $email=$row['email'];
    $date=$row['date'];
    $time_ends=$row['time_ends'];

    $book1=$row['book1'];
    $book2=$row['book2'];
    $book3=$row['book3'];
    $book4=$row['book4'];

    $beverage1=$row['beverage1'];
    $pastry1=$row['pastry1'];
    $beverage2=$row['beverage2'];
    $pastry2=$row['pastry2'];

    $admin_status=$row['admin_status'];
    $admin_note=$row['admin_note'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cafe Librew- Form</title>
        <link rel="stylesheet" type="text/css" href="../admin_css/form.css">
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
                        <ul >
                            <li><a href="main.php"><img class="logo" src="../admin_assests/logo.png"></a></li>
                            <li><h1>CAFE LIBREW</h1></li>
                            <li><h3>RESERVATION SYSTEM</h3></li>
                        </ul> 
                    </div><!--end of header-->
                    <div class="form_container">
                        <h1 class="label"> RESERVATION VIEW FORM</h1>
                        <form method="post">
                            <div class="basic_info_form">
                                <h2>BASIC INFORMATION</h2>
                                    <div class="form_left">
                                        <label for="Name" class="form-label">Name</label> <br> 
                                        <input type="text" class="form-control" name="name" value="<?php echo $name;?>" disabled><br> 

                                        <label for="contact_num" class="form-label">Contact Number</label><br> 
                                        <input type="text" class="form-control"  name="contact_number" value="<?php echo $contact_number;?>" disabled><br> 
                            
                                        <label for="time_begins" class="form-label">Time Begins<label><br> 
                                        <input type="text" class="form-control"  name="time_begins" value="<?php echo $time_begins;?>"disabled>
                                    </div> <!--end of form left-->

                                    <div class="form_right">
                                        <label for="email" class="form-label">Email</label><br> 
                                        <input type="email" class="form-control"  placeholder="@gmail.com" name="email" value="<?php echo $email;?>"disabled><br> 

                                        <label for="date" class="form-label">Date</label><br> 
                                        <input type="date" class="form-control" name="date" value="<?php echo $date;?>"disabled><br> 
                            
                                        <label for="time_ends" class="form-label">Time Ends<label><br> 
                                        <input type="text" class="form-control"  name="time_ends" value="<?php echo $time_ends;?>"disabled>
                                    </div><!--end right div-->
                            </div><!-- basic info div-->
                        <div class="books_form">
                            <h2>BOOKS</h2>
                            <div class="form_left">
                                <label for="book1" class="form-label">ROMANCE & ROM-COM</label> <br> 
                                <input type="text" class="form-control" name="book1" value="<?php echo $book1;?>"disabled>
                                    
                                <label for="book2" class="form-label">LITERARY FICTION & HISTORICAL</label> <br> 
                                <input type="text"class="form-control" name="book2" value="<?php echo $book2;?>"disabled>
                                    
                            </div>
                            <div class="form_right">
                                <label for="book3" class="form-label">SCI-FI & MYSTERY</label> <br> 
                                <input type="text" class="form-control" name="book3" value="<?php echo $book3;?>"disabled>
                                    
                                <label for="book4" class="form-label">FANTASY & WATTPAD</label> <br> 
                                <input type="text" class="form-control" name="book4" value="<?php echo $book4;?>"disabled>  
                            </div>
                        </div><!--end books form-->
                        <div class="beverages_pastries_form">
                            <h2>BEVERAGES AND PASTRIES</h2>
                            <div class="form_left">
                                <label for="beverage1" class="form-label">COFFEE & FRAPPE</label> <br> 
                                <input type="text" class="form-control" name="beverage1" value="<?php echo $beverage1;?>"disabled>
                                    
                                <label for="pastry1" class="form-label">BREAD</label> <br> 
                                <input type="text" class="form-control" name="pastry1" value="<?php echo $pastry1;?>"disabled>   
                            </div>
                            <div class="form_right">
                                <label for="beverage2" class="form-label">JUICE & MILKSHAKE</label> <br> 
                                <input type="text" class="form-control" name="beverage2"value="<?php echo $beverage2;?>"disabled>
                                    
                                <label for="pastry2" class="form-label">DESSERT</label> <br> 
                                <input type="text" class="form-control" name="pastry2"value="<?php echo $pastry2;?>"disabled>  
                            </div>
                        </div><!--end beverages and pastries -->
                        <div class="status_form" >
                            <h2>STATUS</h2> 
                                <div class="form_left">
                                    <label for="admin_status" class="form-label" >Status</label> <br> 
                                    <select class="form-control" name="admin_status" disabled>
                                        <option selected value="<?php echo $admin_status;?>"><?php echo $admin_status;?></option>
                                        <option value="approved">For approval</option>
                                        <option value="approved">Approved</option>
                                    </select>
                                </div>
                                <div class="form_right">
                                    <label for="admin_note" class="form-label">Note from Admin</label><br> 
                                    <input type="text" class="form-control" name="admin_note" value="<?php echo $admin_note;?>"disabled><br> 
                                </div>
                        </div> <!--end status_form--> 
                        </form> <br> <br> 
                    
