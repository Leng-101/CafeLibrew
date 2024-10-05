<?php 
include '../../connect.php';
if(isset($_GET['deletereservation_id'])){
    $reservation_id=$_GET['deletereservation_id'];
    $con = connection(); 
    $sql="delete from `user_reserveform` where reservation_id=$reservation_id";
    $result=mysqli_query($con,$sql);

    if($result){
        header('location:../admin_reservation/admin.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>