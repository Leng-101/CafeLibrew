<?php 
include '../../connect.php';
$reservation_id=$_GET['updatereservation_id'];
$sql="Select * from `user_reserveform` where reservation_id='$reservation_id'";
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

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $contact_number=$_POST['contact_number'];
    $time_begins=$_POST['time_begins'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $time_ends=$_POST['time_ends'];

    $book1=$_POST['book1'];
    $book2=$_POST['book2'];
    $book3=$_POST['book3'];
    $book4=$_POST['book4'];

    $beverage1=$_POST['beverage1'];
    $pastry1=$_POST['pastry1'];
    $beverage2=$_POST['beverage2'];
    $pastry2=$_POST['pastry2'];

    $admin_status=$_POST['admin_status'];
    $admin_note=$_POST['admin_note'];

    $sql="UPDATE user_reserveform SET name='$name', 
    contact_number='$contact_number', 
    time_begins='$time_begins', 
    email='$email', 
    date='$date', 
    time_ends='$time_ends',
    book1='$book1', 
    book2='$book2', 
    book3='$book3', 
    book4='$book4',
    beverage1='$beverage1',
    pastry1='$pastry1', 
    beverage2='$beverage2', 
    pastry2='$pastry2',
    admin_status='$admin_status', 
    admin_note='$admin_note' 
    where reservation_id='$reservation_id'";

    $result=mysqli_query($con,$sql);
    
    if($result)
    {
        //echo "Reservation updated successfully";
        header('location:../admin_reservation/admin_confirmed.php');
           
    }
    else{
        die(mysqli_error($con));
    }

}
include '../header_footer/updateheader.php';
?>
<button class="back_button" name="back"><a href="../admin_reservation/admin_confirmed.php" class="a2">BACK</a></button> <br>
 
<?php 
 include '../header_footer/updatefooter.php';
 ?>      
                       