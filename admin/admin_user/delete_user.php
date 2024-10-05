<?php 
include '../../connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $con = connection(); 
    $sql="delete from `useraccount` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        $sql="delete from `user_reserveform` where user_id=$id";
        $result=mysqli_query($con,$sql);
        header('location:admin_users.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>