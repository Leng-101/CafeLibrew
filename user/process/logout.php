<?php

    if(!isset($_SESSION))
    {
       session_start();
       unset($_SESSION['userlogin']);
       echo header("Location: index_user.php");

    }
?>



    


