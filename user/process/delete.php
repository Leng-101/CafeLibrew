<?php 
    include '../../connect.php';
    $con = connection();
    
if(isset($_GET['deletereservation_id'])){
    $reservation_id=$_GET['deletereservation_id'];

    $sql="delete from `user_reserveform` where reservation_id=$reservation_id";
    $result=mysqli_query($con,$sql);

    if($result){
        header('location:../user_webpage/account.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>