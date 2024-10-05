<?php 
include '../../connect.php';
include '../header_footer/adminheader.php';
$con = connection(); // Method that connect to SQL
?>

                    <button class="button_selected" name="users"><a href="admin_users.php">USERS</a></button> 
                    <button class="button" name="add user"><a href="admin_create.php" class="a2">CREATE USER ACCOUNT</a></button>
                    <button class="button2" name="to_users"><a href="../admin_reservation/admin.php" class="a3">RESERVATIONS</a></button> <br> 
     
                    <div class="form_container">
                    <div class="table_display">
                            <table>
                                <tr>
                                    <th class="table_heading_num">ID </th>
                                    <th class="table_heading_name">USERNAME </th>
                                    <th class="table_heading_time">PASSWORD</th>
                                    <th class="table_heading_time">DELETE</th>
                                </tr>
                                <tbody>
                            <?php 
                            $sql="Select * from `useraccount` ";
                            $result=mysqli_query($con,$sql);

                            if($result){
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $id=$row['id'];
                                    $username=$row['username'];
                                    $password=$row['password'];
                                    
                                    echo'<tr>
                                            <td class="table_data_num">'.$id.'</td>
                                            <td class="table_data_name">'.$username.'</td>
                                            <td class="table_data_time">'.$password.'</td>
                                            <td class="table_heading1">
                                                <button class="table_button" name="delete"><a href="delete_user.php?id='.$id.'" class="a2">DELETE</a></button>
                                                </td>
                                        <tr>
                                    ';
                                }
                            }

                            ?>
                        </tbody>
                            </table>
                        </div>
                    </div>
<?php 
include '../header_footer/adminfooter.php';
?>