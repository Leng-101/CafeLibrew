<?php 
include_once '../../connect.php';
include_once '../header_footer/adminheader.php';
$con = connection(); // Method that connect to SQL
session_start();

if(!isset($_SESSION["admin_username"])) {
header("Location: ../admin_login/admin_login.php");
}

if(isset($_POST["log_out"])) {
    session_destroy();
    unset($_SESSION['admin_username']);
    header("Location: ../admin_login/admin_login.php");

}

?>
     
    <button class="button_selected" name="all_reservations"><a href="admin.php">ALL RESERVATIONS</a></button> 
    <button class="button" name="pending_reservations"><a href="admin_pending.php" class="a2">PENDING RESERVATIONS</a></button>
    <button class="button" name="confirmed_reservations"><a href="admin_confirmed.php" class="a2">APPROVED RESERVATIONS</a></button> 
    <button class="button2" name="to_users"><a href="../admin_user/admin_users.php" class="a3">MANAGE USERS</a></button> <br> 
    
                    <div class="form_container">
                        <div class="table_display">
                            <table>
                                <tr>
                                    <th class="table_heading_num">NO. </th>
                                    <th class="table_heading_name">NAME </th>
                                    <th class="table_heading_time">TIME </th>
                                    <th class="table_heading_date">DATE </th>
                                    <th class="table_heading1">ACTIONS </th>
                                </tr>
                                <tbody>
                            <?php 
                            $sql="Select * from `user_reserveform` ";
                            $result=mysqli_query($con,$sql);

                            if($result){
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $reservation_id=$row['reservation_id'];
                                    $name=$row['name'];
                                    $time_begins=$row['time_begins'];
                                    $time_ends=$row['time_ends'];
                                    $date=$row['date'];
                                    
                                    echo'<tr>
                                            <td class="table_data_num">'.$reservation_id.'</td>
                                            <td class="table_data_name">'.$name.'</td>
                                            <td class="table_data_time">'.$time_begins.'- '.$time_ends.'</td>
                                            <td class="table_data_date">'.$date.'</td>
                                            <td class="table_heading1">
                                                <button class="table_button" name="view"><a href="../admin_process/view.php?viewreservation_id='.$reservation_id.'">VIEW</a></button>
                                                <button class="table_button" name="update"><a href="../admin_process/update.php?updatereservation_id='.$reservation_id.'">UPDATE</a></button>
                                                <button class="table_button" name="delete"><a href="../admin_process/delete.php?deletereservation_id='.$reservation_id.'" class="a2">DELETE</a></button>
                                                </td>
                                        <tr>
                                    ';
                                }
                            }

                            ?>
                        </tbody>
                            </table> <br> 
                            <form action="" method="post">
                            <button class="sign_out_button" name="log_out" >LOG OUT</button> 
                             </form>
                    
                        </div>
                    </div>

<?php 
include '../header_footer/adminfooter.php';
?>